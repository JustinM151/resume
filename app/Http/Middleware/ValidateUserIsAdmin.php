<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ValidateUserIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();
        if ($user->is_admin) {
            return $next($request);
        }
        if (Auth::check()) {
            return redirect('/resume')->withErrors(['You lack the permissions to access that page.']);
        }
        return redirect('/')->withErrors(['You lack the permissions to access that page.']);
    }
}
