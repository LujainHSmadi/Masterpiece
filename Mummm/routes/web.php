<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KitchenController;
use App\Http\Controllers\SignUpController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/login', function () {
    return view('pages.login');
});
Route::get('/products', function () {
    return view('pages.allProducts');
});

Route::resource('/kitchen', KitchenController::class);
Route::resource('/sign-up', SignUpController::class);