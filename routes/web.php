<?php

use App\Http\Controllers\AnimeController;
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

Route::get('/', [AnimeController::class, 'home'])->name('home');

Route::get('/{genre_id}', [AnimeController::class, 'byGenres'])->name('anime.genre');

Route::get('/dettaglio/{id}', [AnimeController::class, 'byId'])->name('anime.byId');