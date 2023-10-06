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
    // kết nối
    protected $table = 'products';

    // Khóa chính
    protected $primaryKey = 'ProductId';

    // các trường còn lại
    protected $fillable = [
        'Id_Product',
        'ProductName',
        'Description',
        'Price',
        'Sale',
        'Image',
        'Status',
        'CategoryID',
        'Created_At',
        'quantity', // Thêm trường quantity
        'expire',   // Thêm trường expire
    ];
    

    // bảng trung gian
    public function categories()
    {
        return $this->belongsToMany(Categories::class, 'category_product', 'ProductId', 'CategoryId');
    }
}
