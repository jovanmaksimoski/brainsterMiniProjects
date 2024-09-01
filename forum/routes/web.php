<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DiscussionController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return redirect()->route('dashboard');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login');

Route::get('/discussions/create', [DiscussionController::class, 'create'])
    ->name('discussions.create')->middleware('auth');

Route::post('/discussions', [DiscussionController::class, 'store'])
    ->name('discussions.store')->middleware('auth');

Route::get('/discussions/{discussion}/edit', [DiscussionController::class, 'edit'])
    ->name('discussions.edit');

Route::patch('/discussions/{discussion}', [DiscussionController::class, 'update'])
    ->name('discussions.update');

Route::delete('/discussions/{discussion}', [DiscussionController::class, 'destroy'])
    ->name('discussions.delete')->middleware('auth');


Route::get('/discussions/approve', [DiscussionController::class, 'approve'])->name('discussions.approve.list')->middleware('is_admin');

Route::patch('/discussions/{discussion}/approve', [DiscussionController::class, 'approveDiscussion'])
    ->name('discussions.approve.single')->middleware('is_admin');

Route::get('/dashboard', [DiscussionController::class, 'showDashboard'])->name('dashboard');

Route::get('/discussions/{discussion}', [DiscussionController::class, 'show'])->name('show');


Route::get('/comments/create/{discussion}', [CommentController::class, 'create'])->name('comments.create');

Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');



Route::get('/comments/{comment}/edit', [CommentController::class, 'edit'])->name('comments.edit');
Route::patch('/comments/{comment}', [CommentController::class, 'update'])->name('comments.update');
Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');
