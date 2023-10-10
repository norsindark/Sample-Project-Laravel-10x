<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('product_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ProductId');
            $table->string('path'); // Đường dẫn hình ảnh
            $table->foreign('ProductId')->references('ProductId')->on('products');
            $table->timestamps();
        });
    }

    public function down() : void
    {
        Schema::dropIfExists('product_images');
    }
};
