<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class LoginMiddleware
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
        // if (!Cookie::has('user'))
        // {
            $user = User::make();
            $user->name = 'Wuhu';
            $user->player_code = random_bytes(4);
        
            //Cookie::queue('user', 'testo');
        // }
        // else {
        //     $userId = Cookie::get('user');
        //     $user = User::find($userId);
        // }

        $request->route()->setParameter('userId', $user);

        return $next($request);
    }
}
