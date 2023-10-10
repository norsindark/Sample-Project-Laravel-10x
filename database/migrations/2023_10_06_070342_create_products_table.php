<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('ProductId'); // Sử dụng kiểu số nguyên tự tăng làm khóa chính
            $table->string('Id_Product')->unique(); // Mã sản phẩm và đảm bảo tính duy nhất
            $table->string('ProductName');
            $table->string('Description');
            $table->decimal('Price', 10, 2); // Sử dụng kiểu số thập phân để lưu giá sản phẩm
            $table->decimal('Sale', 10, 1)->default(0); // Giá giảm giá (nếu có)
            // $table->binary('Image'); // Hình ảnh sản phẩm 
            $table->dateTime('expire'); // Ngày hết hạn (hoặc sử dụng kiểu ngày thích hợp)
            $table->timestamps(); // Thêm cột created_at và updated_at 
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
