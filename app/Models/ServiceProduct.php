<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ServiceProduct extends Model
{
    protected $fillable = [
        'service_category_id',
        'name',
        'slug',
        'description',
        'price',
        'image',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'price' => 'decimal:2'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            if (empty($product->slug)) {
                $product->slug = Str::slug($product->name);
            }
        });

        static::updating(function ($product) {
            if ($product->isDirty('name') && !$product->isDirty('slug')) {
                $product->slug = Str::slug($product->name);
            }
        });
    }

    public function category()
    {
        return $this->belongsTo(ServiceCategory::class, 'service_category_id');
    }
}
