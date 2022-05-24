<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class enseignant
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
        if (!( $value == "Enseignant")) {
            toast("Vous n'avez pas la permission d'ouvrir cette page",'error');
            return redirect()->route('home');
        }
        return $next($request);
    }
}
