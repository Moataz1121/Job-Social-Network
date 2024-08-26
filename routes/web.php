<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/register' , function(){
    return view('employee.auth.register');
})->name('employee.register');

Route::get('/login' , function(){
    return view('employee.auth.login');
})->name('employee.login');