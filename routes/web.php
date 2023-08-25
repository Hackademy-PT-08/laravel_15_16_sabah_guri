<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;

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

Route::get('/',[HomeController::class,'index'])
->name('home.index');


//!articles routes

Route::get('/articoli/aggiungi',[ArticleController::class,'create'])
->name('articles.create');
Route::get('/articoli/aggiorna/{id}',[ArticleController::class,'edit'])
->name('articles.edit');

Route::get('/articoli',[ArticleController::class,'index'])
->name('articles.index');
