<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CHomeController;

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
//route resource
Route::resource('/posts', \App\Http\Controllers\PostController::class);

Route::get('/',[App\Http\Controllers\PostController::class,'home']);
Route::get('/search',[App\Http\Controllers\PostController::class,'search']);

Route::get('/guru',function () {
    return view('guru');
});
Route::get('/home',[PostController::class, 'home']);
Route::get('/siswa',function () {
    return view('siswa');
});

Route::get('/blog',function () {
    return view('blog');
});

Route::get('/home',function () {
    return view('home');
});

Route::get('/register',function () {
    return view('register');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register',[AuthController::class, 'register'])->name('register');
    Route::post('/register',[AuthController::class, 'registerPost'])->name('registerPost');
    Route::get('/login',[AuthController::class, 'login'])->name('login');
    Route::post('/login',[AuthController::class, 'loginPost'])->name('loginPost');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home2',[HomeController::class, 'index']);
    Route::delete('/logout',[AuthController::class, 'logout'])->name('logout');
});