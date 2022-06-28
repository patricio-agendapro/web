<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController; 
use App\Http\Controllers\SearchController; 
use App\Http\Controllers\MarketController;
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
    return view('home');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/market/{country}/search', [SearchController::class, 'search']);

Route::get('/market/{country}/{slug}', [LandingController::class, 'landing']);

Route::get('/market/{country}', [MarketController::class, 'home']);