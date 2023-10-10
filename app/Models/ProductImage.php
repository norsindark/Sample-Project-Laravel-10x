<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Products;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class ProductImage extends Model
{
    use HasFactory, HasFactory, Notifiable;

    protected $table = 'product_images';

    protected $primaryKey = 'id';

    protected $fillable = [
        'ProductId',
        'path',
    ];

    public function products()
    {
        return $this->belongsTo(Products::class, 'ProductId', 'ProductId');
    }
}
