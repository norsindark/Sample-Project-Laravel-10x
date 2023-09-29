<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserManagementController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});