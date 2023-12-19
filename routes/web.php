<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login', [RegisterController::class, "login"])->name('login');
Route::post('/login', [RegisterController::class, "postlogin"])->name('login');
Route::get('/register', [RegisterController::class,"register"])->name('register');
Route::post('/register', [RegisterController::class,"postregister"])->name('register');
Route::get('/logout',[RegisterController::class,"logout"])->name('logout');

Route::get('/profile', function () {
    return view("profile");
})->name('main')->middleware('auth');

