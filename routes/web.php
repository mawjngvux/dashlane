<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CredentialsController;

use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\LoginMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('showLogin')->middleware(LoginMiddleware::class);
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegister'])->name('showRegister');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/verify-email/{token}', [AuthController::class, 'verifyEmail'])->name('verifyEmail');
Route::get('/forgot', [AuthController::class, 'showForgotPassword'])->name('forgot');
Route::post('/forgot', [AuthController::class, 'sendResetLink'])->name('sendResetLink');
Route::get('/reset-password/{token}', [AuthController::class, 'showResetPasswordForm']);
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('resetPassword');


Route::get('/credentials', [CredentialsController::class, 'showCredentials'])->name('showCredentials')->middleware(AuthMiddleware::class);