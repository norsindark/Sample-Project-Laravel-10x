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

    Route::get('/', [DashboardController::class, 'index']);
    // Route::resource('');
});