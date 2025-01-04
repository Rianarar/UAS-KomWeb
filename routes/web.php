<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\MessageController;

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
    return view('login-page');
});
Route::get('/login-page', function () {
    return view('login-page');
});
Route::get('/register-page', function () {
    return view('register-page');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/about-page', function () {
    return view('about-page');
});
Route::get('/consult-page', function () {
    return view('consult-page');
});
Route::get('/contact-page', function () {
    return view('contact-page');
});



Route::get('login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::post('/book-consultation', [ConsultationController::class, 'book'])->name('consultation.book');

Route::post('/send-message', [MessageController::class, 'store'])->name('message.store');

