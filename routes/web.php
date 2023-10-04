<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;


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


Route::prefix('admin')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::get('/dashboard/{id}/update', 'DashboardController@edit')->name('dashboard.update');

    // Tạo tuyến để hiển thị trang chỉnh sửa thông tin người dùng từ trang Dashboard
    Route::get('/dashboard/{id}/edit', [DashboardController::class, 'edit'])->name('dashboard.edit');

    // Tạo tuyến để xử lý cập nhật thông tin người dùng từ trang Dashboard
    Route::put('/dashboard/{id}', [DashboardController::class, 'update'])->name('dashboard.update');

    // tạo tuyến add user
    Route::get('/dashboard/create', [DashboardController::class, 'create'])->name('dashboard.create');

    //thêm vào CSDL
    Route::post('/dashboard/store', [DashboardController::class, 'store'])->name('dashboard.store');

    //xóa user
    Route::delete('/dashboard/{id}', [DashboardController::class, 'destroy'])->name('dashboard.destroy');


});

Route::get('/', 'App\Http\Controllers\User\HomeController@index')->name('home');
Route::get('/tin-tuc', 'App\Http\Controllers\User\BlogController@index')->name('tin-tuc');
Route::get('/san-pham', 'App\Http\Controllers\User\ProductController@index')->name('san-pham');
Route::get('/danh-muc', 'App\Http\Controllers\User\CategoryController@index')->name('danh-muc');
Route::get('/gio-hang', 'App\Http\Controllers\User\CartController@index')->name('gio-hang');
Route::get('/thanh-toan', 'App\Http\Controllers\User\CheckoutController@index')->name('thanh-toan');


