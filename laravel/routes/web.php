<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProjectController;
use App\Mail\SampleEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;


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

//
Route::get('/', [ProjectController::class, 'index'])
    ->name('home');

Route::get('/project/{project}', [ProjectController::class, 'show'])
    ->name('project.show');

Route::get('/admin/dashboard', [AdminController::class, 'index'])
    ->name('admin.dashboard');

Route::get('/admin/login', [AdminController::class, 'login_form'])
    ->name('admin.login');

Route::post('/login', [AdminController::class, 'login'])
    ->name('login');

Route::get('/logout', [AdminController::class, 'logout'])
    ->name('logout');

Route::post('/addProject', [ProjectController::class, 'store'])
    ->name('add.project');

Route::patch('/edit/{project}', [ProjectController::class, 'update'])
    ->name("edit.project");

Route::delete('/Delete/{project}', [ProjectController::class, 'destroy'])
    ->name("delete.project");

Route::get('/sendMail', [ProjectController::class, 'sendmail'])
    ->name('mail');
