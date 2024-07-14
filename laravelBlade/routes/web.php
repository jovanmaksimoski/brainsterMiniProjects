<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/post', [PageController::class, 'post'])->name('post');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');



Route::get('layout/header' , function () {
    return view ('layout/header');
});

Route::get('layout/footer' , function () {
    return view ('layout/footer');
});
