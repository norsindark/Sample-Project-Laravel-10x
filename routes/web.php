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

