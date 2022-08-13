<?php
use App\Http\Controllers\CartController;
use App\Http\Controllers\KitchenController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [KitchenController::class, 'showCategory']);
Route::resource('category', KitchenController::class);
Route::post('category/{id}', [KitchenController::class, 'update'])->name('updateCategory');
Route::resource('product', ProductController::class);
Route::post('product/{id}', [ProductController::class, 'update'])->name('updateroduct');

Route::resource('cart', CartController::class);
Route::resource('order', OrderController::class);
Route::post('decrease/{id}', [CartController::class, 'decreaseValue'])->name('decrease');

Route::resource('users', UserController::class);
Route::get('/admindash',[OrderController::class,'viewOrders'] )->name('admindash');
Route::post('cancel/{id}',[OrderController::class,'cancel'] )->name('cancel');
Route::post('shipp/{id}',[OrderController::class,'shipped'] )->name('shipped');
Route::post('pend/{id}',[OrderController::class,'pending'] )->name('pending');
Route::post('delever/{id}',[OrderController::class,'delevered'] )->name('delevered'); ;
Route::post('process/{id}',[OrderController::class,'process'] )->name('process'); ;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
