<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Products;
use App\Models\Categories;
use App\Models\Cart;
use App\Models\cartItem;
use App\Http\Controllers\User\HomeController;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Validator::extend('checkUserName', function ($attribute, $value, $parameters, $validator) {
            // Sử dụng biểu thức chính quy để kiểm tra chuỗi
            return preg_match('/^[a-zA-Z0-9_ -]+$/', $value);
        });

        View::composer('*', function ($view) {
            $products = Products::all();
            $categories = Categories::all();
            $controller = app(HomeController::class);

            $request = app(Request::class);

            // $searchProducts = $controller->searchProducts($request);, 'searchProducts' => $searchProducts

            $view->with(['products' => $products, 'categories' => $categories]);

            if (auth()->check()) {
                $controller = app(HomeController::class);

                $cartItems = $controller->getCartData();
                $product_images = $controller->getImage();
                $products = $controller->getProduct();
                $totalPrice = $controller->getTotalPrice();


                $view->with(['cartItems'=> $cartItems, 'product_images' => $product_images, 'products' => $products, 'totalPrice' => $totalPrice]);
            } else {
                $error = "Bạn phải đăng nhập để sử dụng chức năng này.";
                $view->with('error', $error);
            }
        });
    }
}
