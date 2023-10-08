<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateWarehousesTable extends Migration
{
    public function up()
    {
        Schema::create('warehouses', function (Blueprint $table) {
            $table->id();
            $table->string('Id_Product')->unique();
            $table->integer('quantity');
            $table->integer('status')->default(1); // Mặc định status là 1
            $table->foreign('Id_Product')->references('Id_Product')->on('products')->onDelete('cascade');
            $table->timestamps();
        });

        
    }

    public function down(): void
    {
        Schema::dropIfExists('warehouses');
    }
}
