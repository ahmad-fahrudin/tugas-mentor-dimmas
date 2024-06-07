<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('app');
});


Route::get('/', function () {
    return view('app');
});

// Route::resource('/category', CategoryController::class);
// Route::resource('/product', ProductController::class);

Route::controller(CategoryController::class)->group(function () {
    // Route::get('category', [CategoryController::class, 'index']);
    // Route::post('category', [CategoryController::class, 'store'])->name('category.store');
    // Route::get('category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    // Route::patch('category/{id}', [CategoryController::class, 'update'])->name('category.update');
    // Route::delete('category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
    // bisa juga seperti ini
    Route::get('category', 'index');
    Route::post('category', 'store')->name('category.store');
    Route::get('category/{id}/edit', 'edit')->name('category.edit');
    Route::patch('category/{id}', 'update')->name('category.update');
    Route::delete('category/{id}', 'destroy')->name('category.destroy');
});

Route::controller(CategoryController::class)->group(function () {
    Route::get('product', [ProductController::class, 'index']);
    Route::post('product', [ProductController::class, 'store'])->name('product.store');
    Route::get('product/{id}/edit', [productController::class, 'edit'])->name('product.edit');
    Route::patch('product/{id}', [productController::class, 'update'])->name('product.update');
    Route::delete('product/{id}', [productController::class, 'destroy'])->name('product.destroy');
});
