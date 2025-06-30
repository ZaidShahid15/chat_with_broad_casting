<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginContoller;
use App\Http\Controllers\Auth\RegisterContoller;

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
Route::group(['middleware' => 'guest'],function(){
Route::get('/',[LoginContoller::class,'index'])->name('login');
Route::post('login/submit',[LoginContoller::class,'store'])->name('auth.login.submit');
Route::get('/register_auth',[RegisterContoller::class,'index'])->name('auth.register');
Route::post('register/submit',[RegisterContoller::class,'store'])->name('auth.register.submit');
});

Route::group(['middleware' => 'auth'],function(){
    Route::get('/home',[HomeController::class,'index'])->name('index');
    Route::get('/logout',[LoginContoller::class,'logout'])->name('auth.logout');
});
