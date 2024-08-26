<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/register', function () {
    return view('employee.auth.register');
})->name('employee.register');

Route::get('/login', function () {
    return view('employee.auth.login');
})->name('employee.login');

Route::get('/index', function () {
    return view('employee.user.index');
})->name('employee.index');

Route::get('/profile', function () {
    return view('employee.user.profile');
})->name('employee.profile');
Route::get('/job', function () {
    return view('employee.user.job');
})->name('employee.job');

Route::get('/admin/login', function () {
    return view('admin.auth.login');
})->name('admin.login');

Route::get('/admin/index', function () {
    return view('admin.index');
})->name('admin.index');
