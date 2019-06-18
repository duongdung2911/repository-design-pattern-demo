<?php

namespace App\Http\Middleware;

use App\Customer;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckName
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
        $user = Auth::user();
        if ($user->name != 'admin')
            abort(403);
        return $next($request);
    }
}
