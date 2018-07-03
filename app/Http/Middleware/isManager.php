<?php

namespace App\Http\Middleware;

use Closure;
use App\Equipe;
use App\User;
use App\Demande;
use Session;
Use Auth;

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
        if (Auth::user() != null) {
            $equipe = Equipe::whereManagerId(Auth::user()->id)->first();
            if ($equipe != null) {
                $manager = true;
                Session::put('equipe', $equipe);
            }
            $equipeDem = Equipe::whereId(Auth::user()->equipe_id)->first();
            if($equipeDem != null){
                $countDemEquipe = Demande::whereEquipeId($equipeDem->id)->whereClosed(false)->whereProcessorId(NULL)->count();
                Session::put('countDemEquipe', $countDemEquipe);
            }else{
                Session::put('countDemEquipe', 0);
            }

            $countDemMine = Demande::whereUserId(Auth::user()->id)->count();
            $countDemInProg = Demande::whereProcessorId(Auth::user()->id)->whereClosed(false)->count();
        }
        Session::put('manager', $manager);
        Session::put('countDemMine', $countDemMine);
        Session::put('countDemInProg', $countDemInProg);
        return $next($request);
    }
}