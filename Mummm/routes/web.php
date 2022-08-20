<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\KitchenController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\View;
use App\Models\Kitchen;
use App\Models\Product;

Route::get('/', [KitchenController::class, 'showCategory']);
Route::resource('category', KitchenController::class);
Route::resource('product', ProductController::class);
Route::post('comment/{id}', [ProductController::class, 'addComments'])->name('comment');
// Route::get('comment/{id}', [ProductController::class, 'getComments'])->name('getComment');


Route::resource('cart', CartController::class);
Route::resource('users', UserController::class);
Route::resource('order', OrderController::class);


Route::get('kitchens', function () {
    return view('pages.kitchens');
});

view::composer('pages.kitchens', function ($view) {
    $categories = Kitchen::all();
    $popular_products = Product::inRandomOrder()->Limit(3)->get();
    
    $view->with('categories',$categories)->with('popular_products',$popular_products) ;
    
});


Route::post('decrease/{id}', [CartController::class, 'decreaseValue'])->name('decrease');



//admin Routes

// For Admin
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function () {
    Route::post('category/{id}', [CategoryController::class, 'update'])->name('updateCategory');
    Route::post('product/{id}', [ProductController::class, 'update'])->name('updateProduct');
    Route::get('/admindash', [OrderController::class, 'viewOrders'])->name('admindash');
    Route::post('cancel/{id}', [OrderController::class, 'cancel'])->name('cancel');
    Route::post('shipp/{id}', [OrderController::class, 'shipped'])->name('shipped');
    Route::post('pend/{id}', [OrderController::class, 'pending'])->name('pending');
    Route::post('delever/{id}', [OrderController::class, 'delevered'])->name('delevered');;
    Route::post('process/{id}', [OrderController::class, 'process'])->name('process');;
});
