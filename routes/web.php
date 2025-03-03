<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CredentialsController;
use App\Http\Controllers\PasskeysController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\DarkWebMonitoringController;
use App\Http\Controllers\VPNController;
use App\Http\Controllers\PasswordHealthController;
use App\Http\Controllers\IDsController;
use App\Http\Controllers\PersonalInfoController;
use App\Http\Controllers\SecureNotesController;
use App\Http\Controllers\SharingCenterController;


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
Route::get('/passkeys', [PasskeysController::class, 'showPasskeys'])->name('showPasskeys')->middleware(AuthMiddleware::class);
Route::get('/payments', [PaymentsController::class, 'showPayments'])->name('showPayments')->middleware(AuthMiddleware::class);
Route::get('/securenotes', [SecureNotesController::class, 'showSecureNotes'])->name('showSecureNotes')->middleware(AuthMiddleware::class);
Route::get('/darkwebmonitoring', [DarkWebMonitoringController::class, 'showDarkWebMonitoring'])->name('showDarkWebMonitoring')->middleware(AuthMiddleware::class);
Route::get('/vpn', [VPNController::class, 'showVPN'])->name('showVPN')->middleware(AuthMiddleware::class);
Route::get('/passwordhealth', [PasswordHealthController::class, 'showPasswordHealth'])->name('showPasswordHealth')->middleware(AuthMiddleware::class);
Route::get('/ids', [IDsController::class, 'showIDs'])->name('showIDs')->middleware(AuthMiddleware::class);
Route::get('/personalinfo', [PersonalInfoController::class, 'showPersonalInfo'])->name('showPersonalInfo')->middleware(AuthMiddleware::class);
Route::get('/sharingcenter', [SharingCenterController::class, 'showSharingCenter'])->name('showSharingCenter')->middleware(AuthMiddleware::class);