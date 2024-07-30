<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/'             , [HomeController::class , 'home'])->name('home');

//categories
Route::controller(CategoryController::class)->prefix('category')->name('category.')->group(function () {
   Route::get('index' , 'index')->name('index');
   Route::get('/{category:slug}' , 'show')->name('show');
});


//posts
Route::controller(PostController::class)->prefix('post')->name('post.')->group(function () {
   Route::get('/{post:slug}' , 'show')->name('show');
});
