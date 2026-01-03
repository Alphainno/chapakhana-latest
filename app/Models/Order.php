<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'order_number',
        'shipping_name',
        'shipping_email',
        'shipping_phone',
        'shipping_country',
        'shipping_address',
        'shipping_city',
        'shipping_state',
        'shipping_zip',
        'payment_method',
        'notes',
        'subtotal',
        'tax',
        'total',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
