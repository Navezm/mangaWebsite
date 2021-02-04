<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\MangaController;
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

Route::get('/', [MangaController::class,'index']);
Route::get('/form', [MangaController::class,'create']);
Route::post('/addManga', [MangaController::class,'store']);
Route::get('/mangatheque', [ListingController::class,'listing']);