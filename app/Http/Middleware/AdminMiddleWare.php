<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = \Illuminate\Support\Facades\Auth::user();
        if ($user && $user->role === 'admin') {

            return $next($request);
        }

        return redirect('/')->with('error', 'You Dont Have The Primssion to Enter Admin Page');
    }
}
