<?php
use App\Http\Middleware\Admin;
use App\Http\Middleware\Admin\AdminGest;
use App\Http\Middleware\EmployeGuest;
use App\Http\Middleware\Employer as MiddlewareEmployer;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
        $middleware->alias([
            'Admin' => Admin::class,
            'Adminguest' => AdminGest::class,
            'Employer' => MiddlewareEmployer::class,
            'Employerguest' => EmployeGuest::class
        ]);
        
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
