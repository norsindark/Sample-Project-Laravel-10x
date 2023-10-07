<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id('OrderId');
            $table->unsignedBigInteger('UserId');
            $table->dateTime('OrderDate');// ngày đătj hàng
            $table->decimal('TotalAmount', 10, 2); // - Tổng đơn hàng
            $table->enum('status', ['Processing', 'Shipped', 'Completed', 'Cancelled']); //trạng thái đơn hàng
            $table->timestamps();

            // Khóa ngoại liên kết với bảng users
            $table->foreign('UserId')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
