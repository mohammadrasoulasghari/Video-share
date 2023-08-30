<?php

use App\Models\User;
use App\Jobs\EmailSender;
use App\Mail\VerifyEmail;
use App\Jobs\ProcessVideo;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\DisLikeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\CategoryVideoController;

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

Route::get('/', [IndexController::class, 'index'])->name('index');


Route::get('/videos/create', [VideoController::class, 'create']);
Route::post('/videos', [VideoController::class, 'store'])->name('videos.store');

//route Model Bounding
Route::get('/videos/{video}', [VideoController::class, 'show'])->name('videos.show');
Route::get('/videos/{video}/edit', [VideoController::class, 'edit'])->name('videos.edit');
Route::post('/videos/{video}', [VideoController::class, 'update'])->name('videos.update');

Route::get('/categories/{category:slug}/videos', [CategoryVideoController::class, 'index'])->name('categories.videos.index');

Route::post('/videos/{video}/comments', [CommentsController::class, 'store'])->name('comments.store');
Route::get('/{likeable_type}/{likeable_id}/like', [LikeController::class, 'store'])->name('likes.store');
Route::get('/{likeable_type}/{likeable_id}/dislike', [DisLikeController::class, 'store'])->name('dislikes.store');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/email', function () {

    return new VerifyEmail;
});
Route::get('/jobs', function () {
    ProcessVideo::dispatch();
    EmailSender::dispatch();
});
