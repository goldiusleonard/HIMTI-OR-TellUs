<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'displayView']);

Route::get('/category/{category_id}', [CategoryController::class, 'displayView']);

Route::get('/detail/{book_id}', [BookController::class, 'displayView']);

Route::get('/contact', [ContactController::class, 'displayView']);
