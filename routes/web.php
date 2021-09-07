<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;


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

//NO2
//Route::get('/', [PageController::class, 'index']);
//Route::get('/abaut', [PageController::class, 'abaut']);
//Route::get('/articles/{id}', [PageController::class, 'articles']);

//NO3
Route::get('/', [HomeController::class, 'greetings']);
Route::get('/abaut', [AboutController::class, 'identitas']);
Route::get('/articles/{id}', [ArticleController::class, 'artikel']);