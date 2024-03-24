<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * перенаправление неавторизованного пользователя в гостевом режиме
     */
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('mediator');
    }
}