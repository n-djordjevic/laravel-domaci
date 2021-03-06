<?php

use App\Http\Controllers\MovieApiController;
use App\Http\Controllers\MovieListApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Movie;
use App\Models\MovieList;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// movie api
Route::get('/movie', [MovieApiController::class, 'getAll']);
Route::get('/movies/{movie_list_id}', [MovieApiController::class, 'getMovieFromList']);
Route::get('/movie/{movie}', [MovieApiController::class, 'getMovie']);
Route::post('/movie', [MovieApiController::class, 'insert']);
Route::put('/movie/{movie}', [MovieApiController::class, 'update']);
Route::delete('/movie/{movie}', [MovieApiController::class, 'destroy']);


// movie-list api
Route::get('/movie-list', [MovieListApiController::class, 'getAll']);
Route::post('/movie-list', [MovieListApiController::class, 'insert']);
Route::put('/movie-list/{movieList}', [MovieListApiController::class, 'update']);
Route::delete('/movie-list/{movieList}', [MovieListApiController::class, 'destroy']);
