<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Demande;
use App\Equipe;
use App\User;
use Auth;
use Illuminate\Support\Facades\DB;
use Session;

class SearchController extends Controller
{
    protected function userSearch(Request $request, $actived)
    {
        if (Auth::user()->role->name != 'Administrateur') {
            Session::flash('alert-danger', "Vous ne diposez pas des droits pour accéder à cette page");
            return redirect('/home');
        }

        $search = $request->input('search');

        switch ($actived) {
            case 'true':

                $users = User::where('email', 'like', "%" . $search . "%")
                    ->where('actived', true)
                    ->orderby('lastname')
                    ->paginate(5);

                break;
            case 'false':
                $users = User::where('email', 'like', "%" . $search . "%")
                    ->where('actived', false)
                    ->orderby('lastname')
                    ->paginate(5);
                break;
            default:
                Session::flash('alert-danger', "Liste utilisateur introuvable");
                return redirect('/home');
        }
        $data['users'] = $users;
        $data['from'] = $actived;
        return view('adminUsers', ['data' => $data]);
    }

    protected function equipeSearch(Request $request)
    {

        $search = $request->input('search');

        $equipes = Equipe::where('name', 'like', "%" . $search . "%")
            ->where('actived', true)->orderBy('name')->paginate(6);

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
                    ->whereProcessorId(NULL)->whereIn('statut_id', [1, 2,6])->where('title', 'like', "%" . $search . "%")
                    ->orderBy('created_at')->paginate(6);
                $data['title'] = "Demande de l'équipe " . $equipe->name;
                break;

            case 'refus':
                $equipe = Equipe::whereId(Auth::user()->equipe_id)->first();
                if ($equipe == NULL) {
                    Session::flash('alert-danger', "L'utilisateur n'appartient à aucune équipe");
                    return redirect('/home');
                }
                $demandes = Demande::whereEquipeId($equipe->id)->whereClosed(true)
                    ->whereStatutId(3)->where('title', 'like', "%" . $search . "%")
                    ->orderBy('created_at')->paginate(6);

                $data['title'] = "Demande refusées";
                break;

            case 'all':
                if (Auth::user()->role->name != 'Administrateur') {
                    Session::flash('alert-danger', "Vous ne diposez pas des droits pour accéder à cette page");
                    return redirect('/home');
                }
                $demandes = Demande::Where('title', 'like', "%" . $search . "%")
                    ->orderBy('created_at')->paginate(6);
                $data['title'] = "Les demandes";
                break;

            case 'mine':
                $demandes = Demande::whereUserId(Auth::user()->id)
                    ->Where('title', 'like', "%" . $search . "%")
                    ->orderBy('created_at')->paginate(6);

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
                    ->where('statut_id', '=', 4)
                    ->where('title', 'like', "%" . $search . "%")
                    ->orderBy('created_at')->paginate(6);

                $data['title'] = "Demandes en cours de traitement";
                break;
            case 'plus' :
                $demandes = Demande::whereUserId(Auth::user()->id)
                    ->whereClosed(false)
                    ->whereStatutId(6)
                    ->Where('title', 'like', "%" . $search . "%")
                    ->orderBy('created_at')->paginate(6);

                $data['title'] = "Demandes en attente de précision";
                break;

            case 'cloturee':
                $equipe = Equipe::whereId(Auth::user()->equipe_id)->first();
                if ($equipe == NULL) {
                    Session::flash('alert-danger', "L'utilisateur n'appartient à aucune équipe");
                    return redirect('/home');
                }
                $demandes = Demande::whereEquipeId($equipe->id)
                    ->whereClosed(true)->whereStatutId(5)
                    ->Where('title', 'like', "%" . $search . "%")
                    ->orderBy('created_at')->paginate(6);

                $data['title'] = "Demande cloturée";
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