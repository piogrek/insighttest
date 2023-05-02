<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::middleware('auth')->get('/', [NewsController::class,"index"])->name('home');

Route::get('/login', function () {
    return view('login');
})->name("login");

Route::post(
    '/login',
    // call login controller
    [LoginController::class, 'authenticate']

)->name("authenticate");

Route::get(
    '/logout',
    [LoginController::class, 'logout']

)->name("logout");
