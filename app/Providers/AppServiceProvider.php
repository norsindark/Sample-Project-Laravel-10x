<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

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
    }
}
