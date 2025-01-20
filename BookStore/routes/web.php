<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EsewaController;

Route::get('/', [UserController::class,'home'] )->name('home');

Route::get('/dashboard', [UserController::class,'login_home'] )->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('admin/dashboard', [UserController::class,'index'])->middleware(['auth','admin']);

Route::get('/view_category', [AdminController::class,'view_category'])->middleware(['auth','admin']);


Route::post('/add_category', [AdminController::class,'add_category'])->middleware(['auth','admin']);


Route::get('edit_category/{id}', [AdminController::class,'edit_category'])->middleware(['auth','admin']);


Route::get('add_product', [AdminController::class,'add_product'])->middleware(['auth','admin']);

Route::post('upload_product', [AdminController::class,'upload_product'])->middleware(['auth','admin']);


Route::get('view_product', [AdminController::class,'view_product'])->middleware(['auth','admin']);



Route::get('update_product/{id}', [AdminController::class,'update_product'])->middleware(['auth','admin']);

Route::post('edit_product/{id}', [AdminController::class,'edit_product'])->middleware(['auth','admin']);


Route::get('product_details/{id}', [UserController::class,'product_details']);

//check for put
Route::put('update_category/{id}', [AdminController::class,'update_category'])->middleware(['auth','admin']);

//check for delete
Route::delete('delete_category/{id}', [AdminController::class,'delete_category'])->middleware(['auth','admin'])->name('delete_category');

Route::delete('delete_product/{id}', [AdminController::class,'delete_product'])->middleware(['auth','admin'])->name('delete_product');

Route::get('product_search', [UserController::class,'product_search']);

Route::get('esewa', [UserController::class,'esewa_form'])->middleware('auth','verified')->name('esewa_form');

Route::get('payment_verify', [EsewaController::class,'payment_verify']);

Route::get('/payment_success', [EsewaController::class, 'payment_success'])->name('payment_success');

Route::get('/payment_failed', [EsewaController::class, 'payment_failed'])->name('payment_failed');
