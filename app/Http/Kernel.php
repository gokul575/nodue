<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        // \App\Http\Middleware\TrustHosts::class,
        \App\Http\Middleware\TrustProxies::class,
        \Fruitcake\Cors\HandleCors::class,
        \App\Http\Middleware\PreventRequestsDuringMaintenance::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            'throttle:api',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class,
        'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,

        'superadmin'=>\App\Http\Middleware\SuperAdmin::class,
        'admin'=>\App\Http\Middleware\Admin::class,
        'accounts'=>\App\Http\Middleware\Accounts::class,
        'sports'=>\App\Http\Middleware\Sports::class,
        'library'=>\App\Http\Middleware\Library::class,
        'csehod'=>\App\Http\Middleware\csehod::class,
        'ecehod'=>\App\Http\Middleware\ecehod::class,
        'eeehod'=>\App\Http\Middleware\eeehod::class,
        'mehod'=>\App\Http\Middleware\mehod::class,
        'cehod'=>\App\Http\Middleware\cehod::class,
        'ithod'=>\App\Http\Middleware\ithod::class,
        'cselab'=>\App\Http\Middleware\cselab::class,
        'ecelab'=>\App\Http\Middleware\ecelab::class,
        'eeelab'=>\App\Http\Middleware\eeelab::class,
        'melab'=>\App\Http\Middleware\melab::class,
        'celab'=>\App\Http\Middleware\celab::class,
        'itlab'=>\App\Http\Middleware\itlab::class,
        'fehod'=>\App\Http\Middleware\fehod::class,
        'felab'=>\App\Http\Middleware\felab::class,


        'student'=>\App\Http\Middleware\Student::class,
    ];
}