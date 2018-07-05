<?php

namespace App\Http\Middleware;

use Closure;
use App\Equipe;
use App\User;
use App\Demande;
use Session;
Use Auth;
use Illuminate\Http\Response;

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
            if(Auth::user()->actived != true){
                Auth::logout();
                return new Response(view('deactivateUser'));
            }
            $equipe = Equipe::whereManagerId(Auth::user()->id)->first();
            if ($equipe != null) {
                $manager = true;
                Session::put('equipe', $equipe);
            }
            $equipeDem = Equipe::whereId(Auth::user()->equipe_id)->first();
            if($equipeDem != null){
                $countDemEquipe = Demande::whereEquipeId($equipeDem->id)->whereClosed(false)->whereProcessorId(NULL)->whereIn('statut_id', [1,2,6])->count();
                $countDemRefus = Demande::whereEquipeId($equipeDem->id)->whereClosed(true)->whereStatutId(3)->count();
                Session::put('countDemEquipe', $countDemEquipe);
                Session::put('countDemRefus', $countDemRefus);

            }else{
                Session::put('countDemEquipe', 0);
                Session::put('countDemRefus', 0);
            }

            $countDemMine = Demande::whereUserId(Auth::user()->id)->count();
            $countDemInProg = Demande::whereProcessorId(Auth::user()->id)->whereClosed(false)->where('statut_id','=',4)->count();
            Session::put('countDemMine', $countDemMine);
            Session::put('countDemInProg', $countDemInProg);
        }

        Session::put('manager', $manager);

        return $next($request);
    }
}