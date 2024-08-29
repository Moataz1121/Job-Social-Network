<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/register', function () {
//     return view('employee.auth.register');
// })->name('employee.register');

// Route::get('/login', function () {
//     return view('employee.auth.login');
// })->name('employee.login');

Route::get('/index', function () {
    return view('employee.user.index');
})->name('employee.index');

Route::get('/profile', function () {
    return view('employee.user.profile');
})->name('employee.profile')->middleware('auth');



Route::get('/job', function () {
    return view('employee.user.job');
})->name('employee.job');

Route::get('/admin/login', 
    [App\Http\Controllers\Admin\AdminController::class, 'index']
)->name('admin.showLogin')->middleware('Adminguest');

Route::post('/admin/login',
    [App\Http\Controllers\Admin\AdminController::class, 'login']
)->name('admin.login');

Route::post('/admin/logout',
    [App\Http\Controllers\Admin\AdminController::class, 'logout']
)->name('admin.logout');

Route::get('/admin/index', function () {
    return view('admin.index');
})->name('admin.index')->middleware('Admin');

