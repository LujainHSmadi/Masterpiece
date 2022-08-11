<?php
use App\Http\Controllers\CartController;
use App\Http\Controllers\KitchenController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [KitchenController::class, 'showCategory']);
Route::resource('category', KitchenController::class);
Route::resource('product', ProductController::class);
Route::resource('cart', CartController::class);
Route::resource('order', OrderController::class);
Route::patch('decrease/{id}', [CartController::class, 'decreaseValue'])->name('decrease');
// Route::match(['put', 'patch'], '/decrease/{id}', 'App\Http\Controllers\CartController@decreaseValue')->name('decrease');

Route::resource('users', UserController::class);
Route::get('/admindash', function () {
    return view('admin.productView');
});
// Route::get('/sigForm', [UserController::class, 'create']);
// Route::post('/sigup', [UserController::class, 'store'])->name('sigup');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
