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

// Страница со списком фильмов
Route::get('/', function () {
    return redirect()->route('movies');
});

Route::get('/movies', [MovieController::class, 'index'])
    ->name('movies');

// Страница со списком избранного
Route::get('/favourites', [MovieController::class, 'get_favourites'])
    ->name('favourites');

// Добавление в список избранного
Route::post('/favourites/add', [MovieController::class, 'store'])
    ->name('add_favourite');

// Удаление из списка избранного
Route::get('/favourites/remove/{id}', [MovieController::class, 'remove_favourite'])
    ->name('remove_favourite');

// Страница с информацией о фильме
Route::get('/movies/{movie_id}', [MovieController::class, 'movie_by_id'])
	->name('movie_by_id');

// Страница авторизации
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
