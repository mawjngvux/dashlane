<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CredentialsController;
use App\Http\Controllers\PasskeysController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\SecureNotesController;
use App\Http\Controllers\PersonalInforController;
use App\Http\Controllers\IDSController;
use App\Http\Controllers\SharingCenterController;
use App\Http\Controllers\PasswordHealthController;
use App\Http\Controllers\DarkWebMonitoringController;
use App\Http\Controllers\VPNController;

use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\LoginMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('showLogin')->middleware(LoginMiddleware::class);
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');



Route::get('/credentials', [CredentialsController::class, 'showCredentials'])->name('showCredentials')->middleware(AuthMiddleware::class);
Route::get('/passkeys', [PasskeysController::class, 'showPasskeys'])->name('showPasskeys')->middleware(AuthMiddleware::class);
Route::get('/payments', [PaymentsController::class, 'showPayments'])->name('showPayments')->middleware(AuthMiddleware::class);
Route::get('/secure-notes', [SecureNotesController::class, 'showSecureNotes'])->name('showSecureNotes')->middleware(AuthMiddleware::class);
Route::get('/personal-info', [PersonalInforController::class, 'showPersonalInfor'])->name('showPersonalInfor')->middleware(AuthMiddleware::class);
Route::get('/ids', [IDSController::class, 'showIDS'])->name('showIDS')->middleware(AuthMiddleware::class);
Route::get('/sharing-center', [SharingCenterController::class, 'showSharingCenter'])->name('showSharingCenter')->middleware(AuthMiddleware::class);
Route::get('/password-health', [PasswordHealthController::class, 'showPasswordHealth'])->name('showPasswordHealth')->middleware(AuthMiddleware::class);
Route::get('/dark-web-monitoring', [DarkWebMonitoringController::class, 'showDarkWebMonitoring'])->name('showDarkWebMonitoring')->middleware(AuthMiddleware::class);
Route::get('/vpn', [VPNController::class, 'showVPN'])->name('showVPN')->middleware(AuthMiddleware::class);
