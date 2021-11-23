<?php

use App\Http\Controllers\FilmsManager\FilmsManagerController;
use App\Http\Controllers\FilmsManager\GenresController;
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

Auth::routes();

Route::get('/home', [FilmsManagerController::class, 'index'])->name('home');

/**
 * Films Routes
 */
Route::group([
    'as' => 'films.',
    'prefix' => 'films',
    'middleware' => 'auth',
], function () {
    Route::get('/', [FilmsManagerController::class, 'index'])->name('films');
    Route::get('add', [FilmsManagerController::class, 'addFilm'])->name('add_film');
    Route::post('add', [FilmsManagerController::class, 'addFilm'])->name('add_film');
    Route::post('delete/{item_id}', [FilmsManagerController::class, 'deleteFilm'])->name('delete_film');
    Route::post('list', [FilmsManagerController::class, 'getList'])->name('get_list');
    Route::post('list/{genre_id}', [FilmsManagerController::class, 'getListByGenre'])->name('get_list_by_genre');
    Route::post('preview', [FilmsManagerController::class, 'preview'])->name('preview');
});

/**
 * Genres Routes
 */
Route::group([
    'as' => 'genres.',
    'prefix' => 'genres',
    'middleware' => 'auth',
], function () {
    Route::get('/', [GenresController::class, 'index'])->name('genres');
    Route::post('add', [GenresController::class, 'addGenre'])->name('add_genre');
    Route::post('delete/{item_id}', [GenresController::class, 'deleteGenre'])->name('delete_genre');
    Route::post('list', [GenresController::class, 'getList'])->name('get_list');
    Route::post('preview/{item_id}', [GenresController::class, 'preview'])->name('preview');
});


/** CATCH-ALL ROUTE for Backpack/PageManager - needs to be at the end of your routes.php file  **/
Route::get('{page}/{subs?}', ['uses' => '\App\Http\Controllers\PageController@index'])
    ->where(['page' => '^(((?=(?!admin))(?=(?!\/)).))*$', 'subs' => '.*']);
