<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Demande;
use App\Equipe;
use App\User;
use Auth;
use Session;

class SearchController extends Controller
{
    protected function userSearch(Request $request)
    {
        if (Auth::user()->role->name != 'Administrateur') {
            Session::flash('alert-danger', "Vous ne diposez pas des droits pour accéder à cette page");
            return redirect('/home');
        }

        $search = $request->input('search');

        $users = User::where('firstname', $search)
            ->orWhere('lastname', $search
            )->orWhere('email', $search)->get();

        $data['users'] = $users;

        return view('adminUsers', ['data' => $data]);
    }

    protected function equipeSearch(Request $request)
    {
        $search = $request->input('search');

        $equipes = Equipe::where('name', $search)
            ->where('actived' == true)->get();

        return view('equipe', array('equipes' => $equipes));
    }

    protected function demandeSearch($list)
    {
        $data = array();

        switch ($list) {
            case 'equipe':
                break;
            case 'refus':
                $equipe = Equipe::whereId(Auth::user()->equipe_id)->first();
                $data['title'] = "Demande refusées";
                break;
            case 'all':
                if (Auth::user()->role->name != 'Administrateur') {
                    Session::flash('alert-danger', "Vous ne diposez pas des droits pour accéder à cette page");
                    return redirect('/home');
                }
                $data['title'] = "Les demandes";
                break;
            case 'mine':
                $data['title'] = "Mes demandes";
                break;
            case 'inprogress':
                $data['title'] = "Demandes en cours de traitement";
                break;
            default:
                Session::flash('alert-danger', "Liste de demandes introuvable");
                return redirect('/home');
        }
        return view('listDemande', ['data' => $data]);
    }
}
