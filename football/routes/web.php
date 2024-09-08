<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatchController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;

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
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/matches', [MatchController::class, 'index'])->name('matches.index');

    Route::middleware('adminRole')->group(function () {
        Route::get('/matches/create', [MatchController::class, 'create'])->name('matches.create');
        Route::post('/matches/store', [MatchController::class, 'store'])->name('matches.store');
        Route::get('/matches/edit/{id}', [MatchController::class, 'edit'])->name('matches.edit');
        Route::post('/matches/update{id}', [MatchController::class, 'update'])->name('matches.update');
        Route::delete('/matches/delete/{id}', [MatchController::class, 'delete'])->name('matches.delete');

        Route::get('/teams', [TeamController::class, 'index'])->name('teams.index');
        Route::get('/teams/create', [TeamController::class, 'create'])->name('teams.create');
        Route::post('/teams/store', [TeamController::class, 'store'])->name('teams.store');
        Route::get('/teams/edit/{id}', [TeamController::class, 'edit'])->name('teams.edit');
        Route::post('/teams/update{id}', [TeamController::class, 'update'])->name('teams.update');
        Route::delete('/teams/delete/{id}', [TeamController::class, 'delete'])->name('teams.delete');

        Route::get('/players', [PlayerController::class, 'index'])->name('players.index');
        Route::get('/players/create', [PlayerController::class, 'create'])->name('players.create');
        Route::post('/players/store', [PlayerController::class, 'store'])->name('players.store');
        Route::get('/players/edit/{id}', [PlayerController::class, 'edit'])->name('players.edit');
        Route::post('/players/update/{id}', [PlayerController::class, 'update'])->name('players.update');
        Route::delete('/players/delete/{id}', [PlayerController::class, 'delete'])->name('players.delete');
    });
});

