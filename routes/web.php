<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [PostsController::class, "index"])->name("home");
Route::post('/', [PostsController::class, "store"]);
Route::delete('/{post}', [PostsController::class, "delete"])->name('post.delete');

Route::get('/login', [LoginController::class, "index"])->name("login");
Route::post('/login', [LoginController::class, "store"]);

Route::get('/register', [RegisterController::class, "index"])->name("register");
Route::post('/register', [RegisterController::class, "store"]);

Route::post('/logout', [LogoutController::class, "store"])->name("logout");