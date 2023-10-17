<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Products;
use Illuminate\Database\Eloquent\Model;

class cartItem extends Model
{
    use HasFactory;

    protected $table = 'cart_items'; 

    protected $primary ='id';

    protected $fillable = [
        'cart_id', 
        'product_id', 
        'quantity', 
        'price', 
    ];

    public function cart()
    {
        return $this->belongsTo(Cart::class, 'cart_id');
    }

    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }
}
