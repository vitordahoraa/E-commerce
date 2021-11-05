<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('home');
});

Auth::routes();
/**
 * 
 * Rotas para o GRUD de fornecedores
*/
Route::get('/m/create', [App\Http\Controllers\MerchantController::class, 'create_view']);
Route::get('/m/{merchant}/edit', [App\Http\Controllers\MerchantController::class, 'edit']);
Route::patch('/m/{merchant}/update', [App\Http\Controllers\MerchantController::class, 'update']);
Route::post('/m/store', [App\Http\Controllers\MerchantController::class, 'store']);

Route::get('/p/{product}/edit', [App\Http\Controllers\ProductsController::class,'edit']);
Route::get('/p/create', [App\Http\Controllers\ProductsController::class,'create_view']);
Route::get('/p/{product}', [App\Http\Controllers\ProductsController::class,'show']);
Route::patch('/p/{product}/update', [App\Http\Controllers\ProductsController::class,'update']);

Route::get('/p/{product}/delete', [App\Http\Controllers\ProductsController::class,'destroy']);
Route::delete('/p/{product}/delete', [App\Http\Controllers\ProductsController::class,'destroy']);
Route::post('/p/store', [App\Http\Controllers\ProductsController::class, 'store']);


Route::get('/o/{user}/{product}/create', [App\Http\Controllers\OrderItemController::class, 'create_view'])->name('order');
Route::patch('/o/{orderitem}/update', [App\Http\Controllers\OrderItemController::class, 'update']);
Route::get('/o/{orderitem}/edit', [App\Http\Controllers\OrderItemController::class,'edit_view']);
Route::delete('/o/{orderitem}/delete', [App\Http\Controllers\OrderItemController::class,'destroy']);

Route::get('/o', [App\Http\Controllers\OrderController::class,'show'])->name('order_show');
Route::patch('/o/{order}/buy', [App\Http\Controllers\OrderController::class,'buy'])->name('bought');
Route::post('/o/{user}/{product}/store', [App\Http\Controllers\OrderController::class, 'store']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');