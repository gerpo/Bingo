<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class UnknownUserMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Cookie::has('player') && User::find(Cookie::get('player'))) {
            return redirect(route('home'));
        }

        return $next($request);
    }
}
