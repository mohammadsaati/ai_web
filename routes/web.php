<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SiteOrderController;
use Illuminate\Support\Facades\Route;


Route::get('/'             , [HomeController::class , 'home'])->name('home');
Route::get('/blog'             , [HomeController::class , 'blog'])->name('blog');

//categories
Route::controller(CategoryController::class)->prefix('category')->name('category.')->group(function () {
   Route::get('index' , 'index')->name('index');
   Route::get('/{category:slug}' , 'show')->name('show');
});


//posts
Route::controller(PostController::class)->prefix('post')->name('post.')->group(function () {
   Route::get('/{post:slug}' , 'show')->name('show');
});

//site orders
Route::controller(SiteOrderController::class)->prefix('site-order')->name('site-order.')->group(function () {
   Route::post('/store' , 'store')->name('store');
});
