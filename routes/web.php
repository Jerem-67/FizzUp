<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ReviewsController::class, 'index'])->name('reviews.index');
Route::get('/asc', [ReviewsController::class, 'indexAsc'])->name('reviews.indexAsc');
Route::get('/asc/rate/{stars}', [ReviewsController::class, 'rateAsc'])->name('reviews.rateAsc');
Route::get('/rate/{stars}', [ReviewsController::class, 'rateDesc'])->name('reviews.rateDesc');
Route::get('/show/{id}', [ReviewsController::class, 'show'])->name('reviews.show');
Route::get('/new_review', [ReviewsController::class, 'create'])->name('reviews.create');
Route::post('/new_review', [ReviewsController::class, 'store'])->name('reviews.store');
