<?php
use App\Http\Controllers\CartController;
use App\Http\Controllers\KitchenController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('pages.home');
// });

Route::get('/', [KitchenController::class, 'showCategory']);
Route::resource('category', KitchenController::class);
Route::resource('product', ProductController::class);
Route::resource('cart', CartController::class);
Route::resource('users', UserController::class);
Route::get('/sigForm', [UserController::class, 'create']);
Route::post('/sigup', [UserController::class, 'store'])->name('sigup');
