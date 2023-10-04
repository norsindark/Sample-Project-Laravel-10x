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
        Schema::create('users', function (Blueprint $table) {
            $table->id(); //  ID tự tăng
            $table->string('username')->unique(); //  UserName với giá trị duy nhất
            $table->string('password'); //  Password
            $table->string('email')->unique(); //  Email với giá trị duy nhất
            $table->string('name'); //  Name
            $table->integer('role')->default(2); //  Role với giá trị mặc định là 2
            $table->integer('status')->default(2); //  Status với giá trị mặc định là 2
            $table->timestamps(); //  Create_At
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
