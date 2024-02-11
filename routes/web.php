<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

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

 
Route::get('/github-auth/redirect', function () {
    return Socialite::driver('github')->redirect();
})->name('github-auth.redirect');
 
Route::get('/github-auth/callback', function () {
    $githubUser = Socialite::driver('github')->user();
 
    $user = User::updateOrCreate([
        'github_id' => $githubUser->id,
    ], [
        'name' => $githubUser->nickname,
        'username' => $githubUser->nickname,
        'email' => $githubUser->email,
        'image_url' => 'default.png',
    ]);
 
    Auth::login($user);
 
    return redirect()->route('main');
});

Route::get('/google-auth/redirect', function () {
    return Socialite::driver('google')->redirect();
})->name('google-auth.redirect');
 
Route::get('/google-auth/callback', function () {
    $googleUser = Socialite::driver('google')->user();
 
    $user = User::updateOrCreate([
        'google_id' => $googleUser->id,
    ], [
        'name' => $googleUser->name,
        'username' => $googleUser->name,
        'email' => $googleUser->email,
        'image_url' => 'default.png',
    ]);
 
    Auth::login($user);
 
    return redirect()->route('main');
});

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

