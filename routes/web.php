<?php

use App\Http\Controllers\WebController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductTypeController;

use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/myshop',[Webcontroller::class,'myshop'])->name('myshop.blade');
Route::resource('/product_types', ProductTypeController::class);
Route::resource('/product', ProductController::class);

Route::get('/error',function(){return view('error_page');})->name('error');
Route::get('/admin-dashboard', [AdminController::class, 'dashboard'])->middleware('is_admin');
require __DIR__.'/auth.php';
