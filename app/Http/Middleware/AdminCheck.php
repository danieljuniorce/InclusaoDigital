<?php

namespace App\Http\Middleware;
use App\User;
use Closure;

class AdminCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->user()->admin != 'Admin') {

            return view('home');
        }
        return $next($request);
    }
}
