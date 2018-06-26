<?php

namespace App\Http\Middleware;

use Closure;
use App\Equipe;
use App\User;

class isManager
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
        $manager = false;
        if (\Auth::user() != null) {
            $equipe = Equipe::whereManagerId(\Auth::user()->id)->first();
            if ($equipe != null) {
                $manager = true;
                \Session::put('equipe', $equipe);
            }
        }
        \Session::put('manager', $manager);
        return $next($request);
    }
}
