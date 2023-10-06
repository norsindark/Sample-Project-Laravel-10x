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
            $table->bigIncrements('ProductId');
            $table->string('ProductName');
            $table->string('Description');
            $table->double('Price');
            $table->double('Sale')->default(0);
            $table->binary('Image');
            $table->integer('Status')->default('1');
            $table->timestamp('Created_At')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
