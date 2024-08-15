<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/myshop', [WebController::class, 'myshop'])->name('web.myshop');  //ใช้แทน nane rout 