<?php
use App\Http\Controllers\AnimeController;
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

Route::get('/', [AnimeController::class,'showAnimeInfo'])->name('animePage');
Route::post('/addAnime', [AnimeController::class,'addAnime'])->name('addAnime');
Route::post('/editAnime', [AnimeController::class,'editAnime'])->name('editAnime');
Route::get('/animelist', [AnimeController::class,'showAnimeList'])->name('animeList');

Route::get('/deleteAnime/{animeID}', [AnimeController::class,'deleteAnime']);









