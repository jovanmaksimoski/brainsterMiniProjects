<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/vehicles', [VehicleController::class, 'index'])->name('vehicles.index');
    Route::post('/vehicles', [VehicleController::class, 'store'])->name('vehicles.store');
    Route::put('/vehicles/{id}', [VehicleController::class, 'update'])->name('vehicles.update');
    Route::delete('/vehicles/{id}', [VehicleController::class, 'delete'])->name('vehicles.delete');
});

// Route::get('/vehicles', [VehicleController::class, 'index'])->name('vehicles.index');
// Route::post('/vehicles', [VehicleController::class, 'store'])->name('vehicles.store');
// Route::patch('/vehicles/{id}', [VehicleController::class, 'update'])->name('vehicles.update');
// Route::delete('/vehicles/{id}', [VehicleController::class, 'delete'])->name('vehicles.delete');

