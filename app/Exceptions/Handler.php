<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * список входных данных что никогда не передаются в в сеанс
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * регистрация обратных вызовов исключений
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}