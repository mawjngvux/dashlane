<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('credential.login', ['title' => 'Login']);

})->name('login');