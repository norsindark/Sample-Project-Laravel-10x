<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Dashboard\Users\UserController;
use App\Http\Controllers\User\RegisterController;
use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\afterLoginController;
use App\Http\Controllers\Admin\Dashboard\Product\ProductControllder;
use App\Http\Controllers\Admin\Dashboard\Category\CategoryControllder;

// Dashboard

Route::prefix('dashboard')->group(function () {

    Route::get('/home', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::prefix('/user')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('dashboard.user.index');

        // hiển thị trang chỉnh sửa thông tin users
        Route::get('/{id}/edit', [UserController::class, 'edit'])->name('dashboard.user.edit');

        // cập nhật thông tin người users
        Route::put('/{id}', [UserController::class, 'update'])->name('dashboard.user.update');

        // route add user
        Route::get('/create', [UserController::class, 'create'])->name('dashboard.user.create');

        //thêm vào CSDL
        Route::post('/store', [UserController::class, 'store'])->name('dashboard.user.store');

        //xóa user
        Route::delete('/{id}', [UserController::class, 'destroy'])->name('dashboard.user.destroy');
    });

    Route::prefix('category')->group(function () {
        // Danh sách các danh mục
        Route::get('/', [CategoryControllder::class, 'index'])->name('dashboard.category.index');

        // Hiển thị form tạo danh mục
        Route::get('/create', [CategoryControllder::class, 'create'])->name('dashboard.category.create');

        // Lưu danh mục mới
        Route::post('/store', [CategoryControllder::class, 'store'])->name('dashboard.category.store');

        // Hiển thị form chỉnh sửa danh mục
        Route::get('/{id}/edit', [CategoryControllder::class, 'edit'])->name('dashboard.category.edit');

        // Cập nhật danh mục
        Route::put('/{id}', [CategoryControllder::class, 'update'])->name('dashboard.category.update');

        // Xóa danh mục
        Route::delete('/{id}', [CategoryControllder::class, 'destroy'])->name('dashboard.category.destroy');
    });


    Route::prefix('product')->group(function () {

        Route::get('/', [ProductControllder::class, 'index'])->name('dashboard.product.index');
    });
});


// Client

Route::prefix('/')->group(function () {
    Route::prefix('/')->group(function () {
        Route::post('/login', [LoginController::class, 'login'])->name('login');
        Route::post('/register', [RegisterController::class, 'register'])->name('register');

        Route::match(['get', 'post'], '/afterLogin', [afterLoginController::class, 'afterLogin'])
            // ->middleware('checkrole:2')
            ->name('afterLogin');

        Route::get('/home', 'App\Http\Controllers\User\HomeController@index')->name('home');
        Route::get('/tin-tuc', 'App\Http\Controllers\User\BlogController@index')->name('tin-tuc');
        Route::get('/san-pham', 'App\Http\Controllers\User\ProductController@index')->name('san-pham');
        Route::get('/danh-muc', 'App\Http\Controllers\User\CategoryController@index')->name('danh-muc');
        Route::get('/gio-hang', 'App\Http\Controllers\User\CartController@index')->name('gio-hang');
        Route::get('/thanh-toan', 'App\Http\Controllers\User\CheckoutController@index')->name('thanh-toan');
    });
});
