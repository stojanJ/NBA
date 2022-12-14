<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
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
    return view('Teams');
});
Route::get('/', [TeamsController::class, 'index']);
Route::get('teams/{id}', [TeamsController::class, 'show'])->name('single-team');
Route::get('players/{id}',[PlayersController::class, 'show'])->name('single-player');

Route::get('/registration', [RegisterController::class, 'create']);
Route::post('/registration', [RegisterController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::get('/logout', [SessionController::class, 'destroy']);

Route::post('/teams/{team_id}/comments',[CommentController::class, 'store'])->name('team-comments');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
