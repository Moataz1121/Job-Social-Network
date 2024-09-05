<?php


use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Employer\LoginController;
use App\Http\Controllers\Employer\RegisterController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/employee/register', function () {
//     return view('employee.auth.register');
// })->name('employee.register');

// Route::get('/employee/login', function () {
//     return view('employee.auth.login');
// })->name('employee.login');

Route::get('/index', function () {
    return view('employee.user.index');
})->name('employee.index');

Route::get('/profile', function () {
    return view('employee.user.profile');
})->name('employee.profile')->middleware('auth');


// Employee Job Page => Index Page.
Route::get('/jobs', [EmployeeController::class, 'index'])->name('employee.job');
Route::post('/jobs/apply/{id}' , [EmployeeController::class, 'apply'])->name('employee.apply');

//=======================================================

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
// ==========================================================================
Route::patch('admin/update/{id}', [CustomController::class, 'update'])->name('admin.update')->middleware('Admin');
Route::get('/admin/index', [CustomController::class, 'index'])->name('admin.index')->middleware('Admin');
Route::get('/admin/details/{id}', [CustomController::class, 'details'])->name('admin.details')->middleware('Admin');
//====================================================
Route::resource('category', CategoryController::class)->middleware('Admin');

// =========================================

Route::get('employer/login', [LoginController::class, 'showLoginForm'])
    ->name('employer.login.view')->middleware('Employerguest');

Route::get('employer/register', function () {
    return view('employer.auth.register');
})->name('employer.register.view');


Route::post('employer/login', [LoginController::class, 'login'])->name('employer.login');

Route::post('employer/logout', [LoginController::class, 'logout'])->name('employer.logout');

Route::post('employer/register', [RegisterController::class, 'register'])->name('employer.register');

Route::get('/emp', function () {
    return view('emp');
})->middleware('Employer')->name('emp');

Route::get('/employer/index', function () {
    return view('employer.index');
})->name('employer.index');


// ===========================================
// Start Employer

Route::get('/employer/data',[EmployerController::class, 'index'])->name('employer.data');
// End Employer
// ===========================================



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('post', PostController::class);

Route::get('/search', [EmployeeController::class, 'search'])->name('jobs.search');


Route::get('/admin/mail/{id}', [CustomController::class, 'mail'])->name('send.mail')->middleware('Admin');
Route::get('/posts/filter_category/{id}', [EmployeeController::class, 'filter_category'])->name('posts.filter_category');
Route::post('/posts/{post}/comments', [PostController::class, 'addComment'])->name('posts.addComment');
Route::delete('/comments/{comment}', [PostController::class, 'DeleteComment'])->name('comments.delete');
Route::put('/comments/{comment}', [PostController::class, 'EditComment'])->name('comments.edit');



//Admin Customize =====================================
Route::get('/admin/users' , [CustomController::class, 'users'])->name('admin.users')->middleware('Admin');
Route::get('admin/detailsUser/{id}', [CustomController::class, 'usersdetails'])->name('users.details')->middleware('Admin');
Route::delete('/admin/delete/{id}', [CustomController::class, 'usersdelete'])->name('users.delete')->middleware('Admin');

//=======================================

Route::get('admin/detailsEmployer/{id}', [CustomController::class, 'employersdetails'])->name('employers.details')->middleware('Admin');
Route::delete('/admin/deleteemp/{id}', [CustomController::class, 'employersdelete'])->name('employers.delete')->middleware('Admin');
Route::get('/admin/employers' , [CustomController::class, 'employers'])->name('admin.employers')->middleware('Admin');