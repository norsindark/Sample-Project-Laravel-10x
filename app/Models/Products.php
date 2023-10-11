<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
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
        'uses',
        'howToUse',
        'sideEffects',
        // 'mainImage',
        'Price',
        'Sale',
        'CategoryID',
        'Created_At',
        'expire',
    ];

    public function saveImages($images)
    {
        foreach ($images as $image) {
            $path = $image->store('product_images', 'public');
            $newImage = new ProductImage;
            $newImage->path = $path;
            $newImage->ProductId = $this->ProductId; // Đặt giá trị cho cột khóa ngoại ProductId
            $newImage->save(); // Lưu bản ghi vào cơ sở dữ liệu
        }
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Categories::class, 'category_product', 'ProductId', 'CategoryId');
    }
}
