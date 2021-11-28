<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Страница со списком фильмов
Route::get('/movies', [MovieController::class, 'index'])
    ->name('movies');

// Страница со списком избранного
Route::get('/favourites', [MovieController::class, 'get_favourites'])
    ->name('favourites');

// Страница с информацией о фильме
Route::get('/movies/{movie_id}', [MovieController::class, 'movie_by_id'])
    ->where('movie_id', '\d+')
	->name('movie_by_id');
