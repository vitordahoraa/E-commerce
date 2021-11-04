<?php

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

Route::get('/', function () {
    return redirect('home');
});

Auth::routes();

Route::get('/m/create', [App\Http\Controllers\MerchantController::class, 'create_view']);
Route::post('/m/store', [App\Http\Controllers\MerchantController::class, 'store']);

Route::get('/p/create', [App\Http\Controllers\ProductsController::class, 'create_view']);
Route::get('/p/{product}/edit', [App\Http\Controllers\ProductsController::class,'edit']);
Route::get('/p/{product}', [App\Http\Controllers\ProductsController::class,'show']);
Route::patch('/p/{product}/update', [App\Http\Controllers\ProductsController::class,'update']);
Route::delete('/p/{product}/delete', [App\Http\Controllers\ProductsController::class,'destroy']);
Route::post('/p/store', [App\Http\Controllers\ProductsController::class, 'store']);


Route::get('/o/{user}/{product}/create', [App\Http\Controllers\OrderItemController::class, 'create_view'])->name('order');

Route::patch('/o/{orderitem}/edit', [App\Http\Controllers\OrderController::class,'edit']);
Route::get('/o', [App\Http\Controllers\OrderController::class,'show']);
Route::patch('/o/{product}/update', [App\Http\Controllers\OrderController::class,'update']);
Route::get('/o/{product}/delete', [App\Http\Controllers\OrderController::class,'destroy']);
Route::post('/o/{user}/{product}/store', [App\Http\Controllers\OrderController::class, 'store']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');