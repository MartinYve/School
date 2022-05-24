<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class admin
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
        $user_role = Auth::user()->roles()->pluck('name');
        foreach ($user_role as $key => $value) {
        }
        if (!( $value == "Admin")) {
            toast('You do not have permission to open this page','error');
            return redirect()->route('home');
        }
        return $next($request);
    }
}
