<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\CategoryVideoController;
use App\Models\Category;
use Illuminate\Database\Query\IndexHint;
use App\Models\Video;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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

Route::get('/',[IndexController::class,'index'])->name('index');


Route::get('/videos/create',[VideoController::class,'create']);
Route::post('/videos',[VideoController::class,'store'])->name('videos.store');

//route Model Bounding
Route::get('/videos/{video}',[VideoController::class,'show'])->name('videos.show');
Route::get('/videos/{video}/edit',[VideoController::class,'edit'])->name('videos.edit');
Route::post('/videos/{video}',[VideoController::class,'update'])->name('videos.update');

Route::get('/categories/{category:slug}/videos',[CategoryVideoController::class,'index'])->name('categories.videos.index');



