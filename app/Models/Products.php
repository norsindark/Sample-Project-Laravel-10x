<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Products extends Model
{
    use HasFactory, HasFactory, Notifiable;
    protected $table = 'products';

    protected $primaryKey = 'ProductId';

    protected $fillable = [
        'Id_Product',
        'ProductName',
        'Description',
        'Price',
        'Sale',
        'Image',
        'CategoryID',
        'Created_At',
        'expire',  
    ];
    public function categories()
    {
        return $this->belongsToMany(Categories::class, 'category_product', 'ProductId', 'CategoryId');
    }
}
