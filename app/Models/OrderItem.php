<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = 'order_items';  // Таблица в базе данных

    protected $fillable = [
        'order_id', 'product_id', 'quantity', 'price'
    ];

    // Связь с заказом
    public function order()
    {
        return $this->belongsTo(Order::class); // Связь с моделью Order
    }

    // Связь с продуктом
    public function product()
    {
        return $this->belongsTo(Product::class); // Связь с моделью Product
    }
}
