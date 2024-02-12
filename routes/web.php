<?php

use App\Http\Controllers\homecontroller;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Route::get('/', function () {
    return view('layouts.welcome');
});
// Route::get('/register',[homecontroller::class,'register'])->name('register');
// Route::get('/login',[homecontroller::class,'login'])->name('login');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
