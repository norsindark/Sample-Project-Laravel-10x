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
        // Validator::extend('removeLeadingZeros', function ($attribute, $value, $parameters, $validator) {
        //     // Loại bỏ số 0 ở đầu sử dụng biểu thức chính quy
        //     $value = preg_replace('/^0+/', '', $value);

        //     return is_numeric($value);
        // });
    }
}
