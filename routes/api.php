<?php

use App\Http\Controllers\CinemaController;
use App\Http\Controllers\FideliteController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SalleController;
use App\Http\Controllers\SeanceController;
use App\Http\Controllers\SiegeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReviewController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/v1')->group(static function () {
    Route::get('/cinemas', [CinemaController::class, 'index'])->middleware('basic.auth');
    Route::post('/cinemas', [CinemaController::class, 'store'])->middleware('basic.auth');
    Route::put('/cinemas/{cinema}', [CinemaController::class, 'update'])->middleware('basic.auth');
    Route::delete('/cinemas/{cinema}', [CinemaController::class, 'destroy'])->middleware('basic.auth');
    Route::get('/cinemas/{cinema}', [CinemaController::class, 'show'])->middleware('basic.auth');

    Route::get('/films', [FilmController::class, 'index']);
    Route::post('/films', [FilmController::class, 'store']);
    Route::put('/films/{film}', [FilmController::class, 'update']);
    Route::delete('/films/{film}', [FilmController::class, 'destroy']);
    Route::get('/films/{film}', [FilmController::class, 'show']);

    Route::get('/salles', [SalleController::class, 'index']);
    Route::post('/salles', [SalleController::class, 'store']);
    Route::put('/salles/{cinema}', [SalleController::class, 'update']);
    Route::delete('/salles/{salle}', [SalleController::class, 'destroy']);
    Route::get('/salles/{salle}', [SalleController::class, 'show']);

 
    Route::get('/seances', [SeanceController::class, 'index']);
    Route::post('/seances', [SeanceController::class, 'store']);
    Route::put('/seances/{seance}', [SeanceController::class, 'update']);
    Route::delete('/seances/{seance}', [SeanceController::class, 'destroy']);
    Route::get('/seances/{seance}', [SeanceController::class, 'show']);

    Route::get('/sieges', [SiegeController::class, 'index']);
    Route::post('/sieges', [SiegeController::class, 'store']);
    Route::put('/sieges/{siege}', [SiegeController::class, 'update']);
    Route::delete('/sieges/{siege}', [SiegeController::class, 'destroy']);
    Route::get('/sieges/{siege}', [SiegeController::class, 'show']);

    Route::get('/fidelites', [FideliteController::class, 'index']);
    Route::post('/fidelites', [FideliteController::class, 'store']);
    Route::put('/fidelites/{fidelite}', [FideliteController::class, 'update']);
    Route::delete('/fidelites/{fidelite}', [FideliteController::class, 'destroy']);
    Route::get('/fidelites/{fidelite}', [FideliteController::class, 'show']);

    Route::get('/reservations', [ReservationController::class, 'index']);
    Route::post('/reservations', [ReservationController::class, 'store']);
    Route::put('/reservations/{reservation}', [ReservationController::class, 'update']);
    Route::delete('/reservations/{reservation}', [ReservationController::class, 'destroy']);
    Route::get('/reservations/{reservation}', [ReservationController::class, 'show']);

    Route::get('/users', [UserController::class, 'index']);
    Route::post('/users', [UserController::class, 'store']);
    Route::put('/users/{user}', [UserController::class, 'update']);
    Route::delete('/users/{user}', [UserController::class, 'destroy']);
    Route::get('/users/{user}', [UserController::class, 'show']);

    Route::get('/reviews', [ReviewController::class, 'index']);
    Route::post('/reviews', [ReviewController::class, 'store']);
    Route::put('/reviews/{review}', [ReviewController::class, 'update']);
    Route::delete('/reviews/{review}', [ReviewController::class, 'destroy']);
    Route::get('/reviews/{review}', [ReviewController::class, 'show']);
}); 

