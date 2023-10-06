<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Products extends Model
{
    use HasFactory, HasFactory, Notifiable;
    // kết nối
    protected $table = 'products';

    // Khóa chính
    protected $primarykey = 'ProductId';

    // Các trường còn lại trong bảng
    protected $fillable = [
        'ProductName',
        'Description',
        'Price',
        'Sale',
        'Image',
        'Status',
        'CategoryID',
    ];

    // bảng trung gian
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_product', 'ProductId', 'CategoryId');
    }
}
