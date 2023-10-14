<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); 
            $table->string('username')->unique(); 
            $table->string('password'); 
            $table->string('email')->unique(); 
            $table->datetime('email_verified_at')->nullable(); 
            $table->string('name')->default(DB::raw('`username`')); 
            $table->integer('role')->default(1); 
            $table->integer('status')->default(2); 
            $table->string('address')->nullable(); 
            $table->string('phone')->nullable(); 
            $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('users'); // Xóa bảng users nếu tồn tại
    }
};
