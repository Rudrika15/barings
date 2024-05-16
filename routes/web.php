<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class,'Home'])->name('home');
Route::get('/about',[AboutController::class,'About'])->name('about');
Route::get('/contact',[ContactController::class,'Contact'])->name('contact');
Route::post('/mail',[ContactController::class,'sendmail'])->name('mail');

Route::get('/product',[ProductController::class,'Product'])->name('product');
Route::get('/product/Resin-Bond',[ProductController::class,'Product1'])->name('Resin');
Route::get('/product/Hybrid-Bond',[ProductController::class,'Product2'])->name('Hybrid');
Route::get('/product/Vitrified-Bond',[ProductController::class,'Product3'])->name('Vitrified');
