<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authcontroller;
use App\Http\Controllers\credentialscontroller;
use App\Http\Middleware\authmiddleware;
use App\Http\Middleware\loginmiddleware;
use App\Http\Controllers\profilecontroller;
use App\Http\Controllers\passkeyscontroller;
use App\Http\Controllers\paymentscontroller;
use App\Http\Controllers\securenotescontroller;
use App\Http\Controllers\personalinfocontroller;
use App\Http\Controllers\idscontroller;
use App\Http\Controllers\sharingcentercontroller;
use App\Http\Controllers\passwordhealthcontroller;
use App\Http\Controllers\darkwebmonitoringcontroller;
use App\Http\Controllers\vpncontroller;


Route::get('/', [authcontroller::class, 'showloginform']);
Route::get('/login', [authcontroller::class, 'showloginform'])->middleware(loginmiddleware::class)->name('showloginform');
Route::get('/logout', [authcontroller::class, 'logout'])->name('logout');
Route::post('/login', [authcontroller::class, 'login'])->name('login');
Route::get('/credentials', [credentialscontroller::class, 'showcredentials'])->middleware(authmiddleware::class)->name('credentials');
Route::get('/passkeys', [passkeyscontroller::class, 'showpasskeys'])->middleware(authmiddleware::class)->name('passkeys');
Route::get('/payments', [paymentscontroller::class, 'showpayments'])->middleware(authmiddleware::class)->name('payments');
Route::get('/securenotes', [securenotescontroller::class, 'showsecurenotes'])->middleware(authmiddleware::class)->name('securenotes');
Route::get('/personalinfo', [personalinfocontroller::class, 'showpersonalinfo'])->middleware(authmiddleware::class)->name('personalinfo');
Route::get('/ids', [idscontroller::class, 'showids'])->middleware(authmiddleware::class)->name('ids');
Route::get('/sharingcenter', [sharingcentercontroller::class, 'showsharingcenter'])->middleware(authmiddleware::class)->name('sharingcenter');
Route::get('/passwordhealth', [passwordhealthcontroller::class, 'showpasswordhealth'])->middleware(authmiddleware::class)->name('passwordhealth');
Route::get('/darkwebmonitoring', [darkwebmonitoringcontroller::class, 'showdarkwebmonitoring'])->middleware(authmiddleware::class)->name('darkwebmonitoring');
Route::get('/vpn', [vpncontroller::class, 'showvpn'])->middleware(authmiddleware::class)->name('vpn');







