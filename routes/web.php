<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Dashboard\Users\UserController;
use App\Http\Controllers\User\RegisterController;
use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\afterLoginController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Client Routes

// Route::prefix('users')->group(function () {

//     // list users
//     Route::get('/', [UserManagementController::class, 'dashboard']);
// });


Route::prefix('dashboard')->group(function () {

    Route::get('/home', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::prefix('user')->group(function () {
        Route::get('/', 'App\Http\Controllers\Admin\Dashboard\Users\UserController@index')->name('dashboard.user.index');

 /*       Route::get('/{id}/update', 'DashboardController@edit')->name('dashboard.user.update');

        // Tạo route để hiển thị trang chỉnh sửa thông tin người dùng từ trang Dashboard
        Route::get('/{id}/edit', [UserController::class, 'edit'])->name('dashboard.user.edit');

        // Tạo route để xử lý cập nhật thông tin người dùng từ trang Dashboard
        Route::put('/{id}', [UserController::class, 'update'])->name('dashboard.user.update');

        // tạo route add user
        Route::get('/create', [UserController::class, 'create'])->name('dashboard.user.create');

        //thêm vào CSDL
        Route::post('/store', [UserController::class, 'store'])->name('dashboard.user.store');

        //xóa user
        Route::delete('/{id}', [UserController::class, 'destroy'])->name('dashboard.user.destroy');*/
    });

    Route::prefix('category')->group(function () {

        Route::get('/', 'App\Http\Controllers\Admin\Dashboard\Category\CategoryControllder@index')->name('dashboard.category.index');
        /*       Route::get('/{id}/update', 'DashboardController@edit')->name('dashboard.user.update');

               // Tạo route để hiển thị trang chỉnh sửa thông tin người dùng từ trang Dashboard
               Route::get('/{id}/edit', [UserController::class, 'edit'])->name('dashboard.user.edit');

               // Tạo route để xử lý cập nhật thông tin người dùng từ trang Dashboard
               Route::put('/{id}', [UserController::class, 'update'])->name('dashboard.user.update');

               // tạo route add user
               Route::get('/create', [UserController::class, 'create'])->name('dashboard.user.create');

               //thêm vào CSDL
               Route::post('/store', [UserController::class, 'store'])->name('dashboard.user.store');

               //xóa user
               Route::delete('/{id}', [UserController::class, 'destroy'])->name('dashboard.user.destroy');*/
    });

    Route::prefix('product')->group(function () {

        Route::get('/', 'App\Http\Controllers\Admin\Dashboard\Product\ProductControllder@index')->name('dashboard.product.index');
        /*       Route::get('/{id}/update', 'DashboardController@edit')->name('dashboard.user.update');

               // Tạo route để hiển thị trang chỉnh sửa thông tin người dùng từ trang Dashboard
               Route::get('/{id}/edit', [UserController::class, 'edit'])->name('dashboard.user.edit');

               // Tạo route để xử lý cập nhật thông tin người dùng từ trang Dashboard
               Route::put('/{id}', [UserController::class, 'update'])->name('dashboard.user.update');

               // tạo route add user
               Route::get('/create', [UserController::class, 'create'])->name('dashboard.user.create');

               //thêm vào CSDL
               Route::post('/store', [UserController::class, 'store'])->name('dashboard.user.store');

               //xóa user
               Route::delete('/{id}', [UserController::class, 'destroy'])->name('dashboard.user.destroy');*/
    });
});

Route::prefix('nhathuoc')->group(function () {
    // Route::prefix('/')->group(function () {

    // });
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
    // Quản lí tài khoản
     Route::prefix('/afterlogin') ->group(function () {
        Route::get('quan-li-tai-khoan', 'App\Http\Controllers\User\ManagerUser\ManagerUserController@index')->name('manageruser');
        Route::get('don-hang-cua-ban', 'App\Http\Controllers\User\ManagerUser\ManagerOderController@index')->name('manageroder');
        Route::get('quan-li-so-dia-chi', 'App\Http\Controllers\User\ManagerUser\ManagerAddressController@index')->name('manageraddress');
    });
});
