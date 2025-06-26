<?php

use App\Http\Middleware\AdminAuth;
use App\Http\Middleware\AdminGuest;
use App\Http\Middleware\AdminRole;
use App\Http\Middleware\CheckCart;
use App\Http\Middleware\CustomerAuth;
use App\Http\Middleware\CustomerGuest;
use App\Http\Middleware\RecordPreviousUrl;
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
        $middleware->alias([
            'adminAuth' => AdminAuth::class,
            'adminGuest' => AdminGuest::class,
            'adminRole' => AdminRole::class,
            'customerAuth' => CustomerAuth::class,
            'customerGuest' => CustomerGuest::class,
            'checkCart' => CheckCart::class,
        ]);
        $middleware->append(RecordPreviousUrl::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
