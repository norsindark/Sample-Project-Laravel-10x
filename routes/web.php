<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Dashboard\Users\UserController;
use App\Http\Controllers\User\HomeController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Dashboard\Product\ProductControllder;
use App\Http\Controllers\Admin\Dashboard\Category\CategoryControllder;
use App\Http\Controllers\Admin\Dashboard\Order\OrderController;
use App\Http\Controllers\Admin\Dashboard\Warehouse\WarehouseController;
use App\Http\Controllers\User\CategoryController;
use App\Http\Controllers\User\ProductController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\User\ManagerUser\ManagerUserController;
use App\Http\Controllers\User\ManagerUser\ManagerOderController;
// use App\Http\Controllers\User\OrderController;
use Illuminate\Support\Facades\Auth;

// Dashboard
//, 'verified'
Route::middleware(['role:1'])->prefix('dashboard')->group(function () {

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
        Route::delete('{CategoryId}', [CategoryControllder::class, 'destroy'])->name('dashboard.category.destroy');

        // show product
        Route::get('showProduct/{CategoryId}', [CategoryControllder::class, 'showProduct'])->name('dashboard.category.showProduct');
    });


    Route::prefix('product')->group(function () {

        // Danh sách các products
        Route::get('/', [ProductControllder::class, 'index'])->name('dashboard.product.index');

        // Hiển thị form tạoproducts
        Route::get('/create', [ProductControllder::class, 'create'])->name('dashboard.product.create');

        // Lưu products mới
        Route::post('/store', [ProductControllder::class, 'store'])->name('dashboard.product.store');

        // Hiển thị form chỉnh sửa products
        Route::get('/{ProductId}/edit', [ProductControllder::class, 'edit'])->name('dashboard.product.edit');

        // update product
        Route::put('/{ProductId}/update', [ProductControllder::class, 'update'])->name('dashboard.product.update');

        // Hiển thị form chỉnh sửa products image
        Route::get('/{ProductId}/editImage', [ProductControllder::class, 'editImage'])->name('dashboard.product.edit_Image');

        // update products image
        Route::put('/{ProductId}/updateImage', [ProductControllder::class, 'updateImage'])->name('dashboard.product.update_Image');

        // Xóa products
        Route::delete('{ProductId}', [ProductControllder::class, 'destroy'])->name('dashboard.product.destroy');

        // Xóa product Image
        Route::delete('{id}/del', [ProductControllder::class, 'delImage'])->name('dashboard.product.del_Image');
    });
    Route::prefix('order')->group(function () {

        // Danh sách các danh mục
        Route::get('/', [OrderController::class, 'index'])->name('dashboard.order.index');
    });
    Route::prefix('Warehouse')->group(function () {

        // warehouse
        Route::get('/', [WarehouseController::class, 'index'])->name('dashboard.warehouse.index');
        Route::get('/{id}/edit', [WarehouseController::class, 'edit'])->name('dashboard.warehouse.edit');
        Route::put('/{id}', [WarehouseController::class, 'update'])->name('dashboard.warehouse.update');
    });

    Route::patch('/update-order-status/{orderId}', [OrderController::class, 'updateOrderStatus'])
        ->name('update-order-status');
})->name('dashboard');


// Client


Route::prefix('/')->group(function () {
    Route::prefix('/')->group(function () {
        Route::get('/', [CategoryController::class, 'dropListCategories'])->name('drop-List-Category');
        Route::get('/home', [HomeController::class, 'checkRoleUser'])->name('checkRole');
        Route::get('/trang-chu', [HomeController::class, 'home'])->name('home');
        Route::get('/tin-tuc', 'App\Http\Controllers\User\BlogController@index')->name('tin-tuc');



        //show product details
        Route::prefix('product')->group(function () {

            // thông tin sản phẩm
            Route::get('{productName}/{ProductId}', [ProductController::class, 'productDetails'])->name('product.details');
        })->name('product');

        //show products in categories
        Route::prefix('danh-muc')->group(function () {

            Route::get('/', [CategoryController::class, 'index'])->name('danh-muc');
            // routes/web.php
            Route::get('{categoryName}/{categoryId}', [CategoryController::class, 'getProducts'])->name('show-products');
        });


        Route::prefix('/')->middleware(['auth'])->group(function () {
            //cart
            Route::get('/gio-hang', [CartController::class, 'index'])->name('gio-hang');
            Route::delete('remove-cart-item/{id}',  [CartController::class, 'removeCartItem'])->name('remove-cart-item');

            Route::prefix('cart')->group(function () {
                Route::post('/add-to-cart/{ProductId}',  [CartController::class, 'addToCart'])->name('add-to-cart');
                // Route::delete('{id}', [CartController::class, 'removeCartItem'])->name('remove-cart-item');
            })->name();

            // order
            Route::post('/create-order', [OrderController::class, 'createOrder'])->name('create.order');

            // payment
            Route::get('/thanh-toan', [CheckoutController::class, 'index'])->name('thanh-toan');
            // Route::post('/thanh-toan', [CheckoutController::class, 'processPayment'])->name('process.payment');

            // checkout
            Route::post('/checkout', [CheckoutController::class, 'processCheckout'])->name('process-checkout');
        });
    });


    // Quản lí tài khoản
    Route::prefix('/')->middleware(['auth'])->group(function () {
        Route::get('quan-li-tai-khoan', 'App\Http\Controllers\User\ManagerUser\ManagerUserController@index')->name('manageruser');
        Route::get('don-hang-cua-ban', 'App\Http\Controllers\User\ManagerUser\ManagerOderController@index')->name('manageroder');
        Route::get('quan-li-so-dia-chi', 'App\Http\Controllers\User\ManagerUser\ManagerAddressController@index')->name('manageraddress');

        //update profile

        Route::get('/profile/edit', [ManagerUserController::class, 'edit'])->name('edit-profile');

        Route::post('/profile/update', [ManagerUserController::class, 'update'])->name('update-profile');

        //remove order
        Route::patch('/remove-order/{orderId}', [ManagerOderController::class, 'removeOrder'])
            ->name('remove-order');
    });
});

Auth::routes();


Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
