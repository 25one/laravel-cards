<?php

namespace App\Http\Middleware;

use Closure;

class Superadmin
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
        $user = $request->user();

        if ($user && $user->role === 'admin') {
        //if ($user && ($user->role === 'admin' || $user->role === 'redac')) {
            return $next($request);
        }

         return redirect()->route('home');
         //return response()->view('errors.403');
    }
}
