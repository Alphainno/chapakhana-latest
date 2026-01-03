<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'description',
        'format',
        'price',
        'rating',
        'popularity',
        'stock',
        'badge',
        'image',
        'is_active'
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'rating' => 'decimal:2',
        'stock' => 'boolean',
        'is_active' => 'boolean'
    ];

    // Automatically generate slug from title
    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($product) {
            if (empty($product->slug)) {
                $product->slug = Str::slug($product->title);
            }
        });
        
        static::updating(function ($product) {
            if ($product->isDirty('title') && !$product->isDirty('slug')) {
                $product->slug = Str::slug($product->title);
            }
        });
    }

    // Relationship with category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
