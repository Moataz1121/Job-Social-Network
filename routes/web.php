<?php

use App\Http\Controllers\Employer\LoginController;
use App\Http\Controllers\Employer\RegisterController;
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

Route::get(
    '/admin/login',
    [App\Http\Controllers\Admin\AdminController::class, 'index']
)->name('admin.showLogin')->middleware('Adminguest');

Route::post(
    '/admin/login',
    [App\Http\Controllers\Admin\AdminController::class, 'login']
)->name('admin.login');

Route::post(
    '/admin/logout',
    [App\Http\Controllers\Admin\AdminController::class, 'logout']
)->name('admin.logout');

Route::get('/admin/index', function () {
    return view('admin.index');
})->name('admin.index')->middleware('Admin');

// =========================================

Route::get('empolyer/login', [LoginController::class, 'showLoginForm'])
->name('empolyer.login.view')->middleware('Employerguest');

Route::get('empolyer/register', function () {
    return view('employer.auth.register');
})->name('employer.register.view');


Route::post('empolyer/login', [LoginController::class, 'login'])->name('empolyer.login');

Route::post('empolyer/logout', [LoginController::class, 'logout'])->name('empolyer.logout');

Route::post('employer/register', [RegisterController::class, 'register'])->name('empolyer.register');

Route::get('/emp', function () {
    return view('emp');
})->middleware('Employer')->name('emp');

Route::get('/employer/index', function () {
    return view('employer.index');
})->name('employer.index');