<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

// app/Http/Middleware/AdminMiddleware.php

use Illuminate\Auth\Middleware\Authenticate;

class AdminMiddleware extends Authenticate
{
    protected function redirectTo($request)
    {
        if (!$request->user() || !$request->user()->role() == 'admin') {
            return abort(403);
        }

        return parent::redirectTo($request);
    }
}
