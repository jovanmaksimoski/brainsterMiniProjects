<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get ('/home' , function () {
    return view('home');
});
Route::get ('/form' , function () {
    return view('form');
});
Route::get ('/info' , function () {
    return view('info');
});



Route::get('/home', [PageController::class, 'home'])->name('home');
Route::get('/form', [PageController::class, 'form'])->name('form');
Route::post('/submit', [FormController::class, 'submit'])->name('submit');
Route::get('/info', [PageController::class, 'info'])->name('info');
Route::post('/clear-session', [FormController::class, 'clearSession'])->name('clearSession');

