<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    'seller_id',
    'category_id',
    'name',
    'description',
    'price',
    'stock',
    'image',
    ];
    public function seller()
{
    return $this->belongsTo(Seller::class);
}

public function category()
{
    return $this->belongsTo(Category::class);
}


public function orderItems()
{
    return $this->hasMany(OrderItem::class);
}

public function orders()
{
    return $this->belongsToMany(Order::class, 'order_items')
        ->withPivot('quantity', 'unit_price')
        ->withTimestamps();
}
}
