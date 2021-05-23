<?php

namespace App\Http\Middleware;

use GuzzleHttp\Psr7\Request;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Request as FacadesRequest;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {

        if (! $request->expectsJson()) {

            if ($request->is('admin/'))

            return route('admin/login');

            else
            return route('login');
        }
    }
}
