<?php

use App\Http\Livewire\GameBoard;
use App\Http\Livewire\UnknownUser;
use App\Http\Middleware\CheckUserMiddleware;
use App\Http\Middleware\UnknownUserMiddleware;
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


Route::get('/new-player', UnknownUser::class)
    ->middleware(UnknownUserMiddleware::class)
    ->name('new-player');

Route::group(['middleware' => [CheckUserMiddleware::class]], function () {
    Route::get('/', GameBoard::class)->name('home');
});
