<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Models\Products;
use Laravel\Sanctum\HasApiTokens;

class Categories extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    // kết nối bảng categories

    protected $table = 'categories';

    // public $timestamps = false;

    // khóa chính
    protected $primaryKey ='CategoryId';

    // trường có thể thêm dữ liệu
    protected $fillable = [
        'CategoryName', //tên categoriy
    ];

    // bảng trung gian
    public function products()
    {
        return $this->belongsToMany(Products::class, 'category_product', 'CategoryId', 'ProductId');
    }

}
