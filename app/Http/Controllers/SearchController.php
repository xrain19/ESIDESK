<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Demande;
use App\Equipe;
use App\User;
use Auth;
use function PHPSTORM_META\type;
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

        $users = User::where('firstname', 'like', "%" . $search . "%")
            ->orWhere('lastname', 'like', "%" . $search . "%"
            )->orWhere('email', 'like', "%" . $search . "%")->orderBy('lastname')->get();

        $data['users'] = $users;

        return view('adminUsers', ['data' => $data]);
    }

    protected function equipeSearch(Request $request)
    {

        $search = $request->input('search');

        $equipes = Equipe::where('name', 'like', "%" . $search . "%")
            ->where('actived', true)->orderBy('name')->get();

        return view('equipe', array('equipes' => $equipes));
    }

    protected function demandeSearch($list, Request $request)
    {
        $data = array();
        $search = $request->input('search');

        switch ($list) {
            case 'equipe':
                $equipe = Equipe::whereId(Auth::user()->equipe_id)->first();
                if ($equipe == NULL) {
                    Session::flash('alert-danger', "Vous n'appartenez à aucune équipe");
                    return redirect('/home');
                }

                $demandes = Demande::whereEquipeId($equipe->id)->whereClosed(false)
                    ->whereProcessorId(NULL)->where('title', 'like', "%" . $search . "%")
                    ->orWhere('id', $search)
                    ->orderBy('created_at')->get();
                $data['title'] = "Demande de l'équipe" . $equipe->name;
                break;

            case 'refus':
                $equipe = Equipe::whereId(Auth::user()->equipe_id)->first();
                if ($equipe == NULL) {
                    Session::flash('alert-danger', "L'utilisateur n'appartient à aucune équipe");
                    return redirect('/home');
                }
                $demandes = Demande::whereEquipeId($equipe->id)->whereClosed(true)
                    ->where('title', 'like', "%" . $search . "%")
                    ->orWhere('id', $search)
                    ->orderBy('created_at')->get();

                $data['title'] = "Demande refusées";
                break;

            case 'all':
                if (Auth::user()->role->name != 'Administrateur') {
                    Session::flash('alert-danger', "Vous ne diposez pas des droits pour accéder à cette page");
                    return redirect('/home');
                }
                $demandes = Demande::Where('title', 'like', "%" . $search . "%")
                    ->orWhere('id', $search)
                    ->orderBy('created_at')->get();
                $data['title'] = "Les demandes";
                break;

            case 'mine':
                $demandes = Demande::whereUserId(Auth::user()->id)
                ->Where('title', 'like', "%" . $search . "%")
                    ->orWhere('id', $search)
                    ->orderBy('created_at')->get();

                foreach ($demandes as $k => $demande) {
                    if ($demande->processor_id != NULL) {
                        $processor = User::whereId($demande->processor_id)->first();
                        $data['processor'][$k] = $processor;
                    }
                }
                $data['title'] = "Mes demandes";
                break;

            case 'inprogress':
                $demandes = Demande::whereProcessorId(Auth::user()->id)
                    ->whereClosed(false)
                    ->Where('title', 'like', "%" . $search . "%")
                    ->orWhere('id',  $search)
                    ->orderBy('created_at')->get();

                $data['title'] = "Demandes en cours de traitement";
                break;

            default:
                Session::flash('alert-danger', "Liste de demandes introuvable");
                return redirect('/home');
        }
        $data['from'] = $list;
        $data['demandes'] = $demandes;
        return view('listDemande', ['data' => $data]);
    }
}
