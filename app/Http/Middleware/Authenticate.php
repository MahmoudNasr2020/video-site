<?php

namespace App\Http\Middleware;

use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Symfony\Component\HttpFoundation\Request;

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
            if(FacadesRequest::is('admin/*')){

                 return route('admin.login.home');
            }
            else{

                return route('login');
            }
        }
    }
}
