<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CheckUserMiddleware
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
        if (!Cookie::has('player')) {
            return redirect('new-player');
        }

        $user = User::find(Cookie::get('player'));
        if ($user == null) {
            return redirect('new-player');
        }

        $request->request->add(['player' => $user->id]);

        return $next($request);
    }
}
