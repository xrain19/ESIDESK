<?php

namespace App\Http\Controllers;

use App\Equipe;
use App\User;
use Illuminate\Http\Request;

use App\Demande;
use App\Categorie;
use Auth;
use Session;

#'descriptions', 'urgency', 'closed', 'desired_date', 'status', 'processor_id', 'processing_date', 'title', 'user_id', 'equipe_id', 'statuts_id'

class DemandeController extends Controller
{

    protected function detailsDemande($id)
    {
        $demande = Demande::whereId($id)->first();
        $user = User::whereEquipeId($demande->equipe_id)->get();
        if($demande == null) {
            Session::flash('alert-danger', "Demande introuvable");
            return redirect('/home');
        }
        $data['demande'] = $demande;
        $data['member'] = $user;
        return view('detailsDemande', ['data' => $data]);
    }

    protected function listDemande($list, $tri)
    {
        $data = array();

        switch ($list) {
            case 'equipe':
                $equipe = Equipe::whereId(Auth::user()->equipe_id)->first();
                $demandes = Demande::whereEquipeId($equipe->id)->whereClosed(false)->whereProcessorId(NULL)->orderBy($tri)->get();
                if ($demandes->isEmpty()) {
                    Session::flash('alert-danger', "Aucunes demandes à traiter");
                    return redirect('/home');
                }
                $data['title'] = "Demande de l'équipe" . $equipe->name;
                break;
            case 'refus':
                $equipe = Equipe::whereId(Auth::user()->equipe_id)->first();
                $demandes = Demande::whereEquipeId($equipe->id)->whereClosed(true)->orderBy($tri)->get();
                if ($demandes->isEmpty()) {
                    Session::flash('alert-danger', "Aucunes demandes refusées");
                    return redirect('/home');
                }
                $data['title'] = "Demande refusées";
                break;
            case 'all':
                if (Auth::user()->role->name != 'Administrateur') {
                    Session::flash('alert-danger', "Vous ne diposez pas des droits pour accéder à cette page");
                    return redirect('/home');
                }
                $demandes = Demande::all()->sortBy($tri);
                if ($demandes->isEmpty()) {
                    Session::flash('alert-danger', "Aucunes demandes");
                    return redirect('/home');
                }
                $data['title'] = "Les demandes";
                break;
            case 'mine':
                $demandes = Demande::whereUserId(Auth::user()->id)->orderBy($tri)->get();
                if ($demandes->isEmpty()) {
                    Session::flash('alert-danger', "Aucunes demandes");
                    return redirect('/home');
                }
                foreach ($demandes as $k=>$demande){
                    if($demande->processor_id != NULL){
                        $processor = User::whereId($demande->processor_id)->first();
                        $data['processor'][$k] = $processor;
                    }
                }
                $data['title'] = "Mes demandes";
                break;
            case 'inprogress':
                $demandes = Demande::whereProcessorId(Auth::user()->id)->whereClosed(false)->orderBy($tri)->get();
                if ($demandes->isEmpty()) {
                    Session::flash('alert-danger', "Aucunes demandes en cours de traitement");
                    return redirect('/home');
                }
                $data['title'] = "Demandes en cours de traitement";
                break;
            default:
                Session::flash('alert-danger', "Liste de demandes introuvable");
                return redirect('/home');
        }

        $data['demandes'] = $demandes;
        return view('listDemande', ['data' => $data]);
    }

    protected function createDemande(Request $request, $id)
    {
        $cat = Categorie::whereId($id)->first();
        if ($cat == null) {
            Session::flash('alert-danger', "Catégorie introuvable");
            return redirect('/home');
        }
        $validatedData = $request->validate([
            'description' => 'required|string|',
            'desired_date' => 'required|date',
            'title' => 'required|string|',
        ]);

        $user = Demande::create([
            'description' => $request->input('description'),
            'urgency' => $request->input('urgency'),
            'desired_date' => $request->input('desired_date'),
            'title' => $request->input('title'),
            'user_id' => Auth::user()->id,
            'equipe_id' => $cat->equipe_id,
            'categorie_id' => $id,
            'statut_id' => 1,
        ]);

        Session::flash('alert-success', "Demande " . $request->input('title') . " créé avec succès");
        return redirect('/home');
    }

    protected function showForm($id)
    {
        $cat = Categorie::whereId($id)->first();

        if ($cat == null) {
            Session::flash('alert-danger', "Catégorie introuvable");
            return redirect('/home');
        }

        $equipe = Equipe::whereId($cat->equipe_id)->first();

        $data = array();
        $data['cat'] = $cat;
        $data['equipe'] = $equipe;
        return view('registerDemande', ['data' => $data]);
    }

    protected function validerDemande($id,$validator){
        switch ($validator) {
            case 'OK':
                $demande = Demande::whereId($id)->first();
                $demande->validated = true;
                $demande->statut_id = 2;
                $demande->save();
                Session::flash('alert-success', "Demande acceptée");
                return redirect('/listDemande/equipe/created_at');
                break;
            case 'KO':
                $demande = Demande::whereId($id)->first();
                $demande->statut_id = 3;
                $demande->closed = true;
                $demande->save();
                Session::flash('alert-danger', "Demande refusée");
                return redirect('/listDemande/equipe/created_at');
                break;
            default:
                Session::flash('alert-danger', "Erreur");
                return redirect('/listDemande/equipe/created_at');
        }

    }

    protected function addMemberDemande(Request $request,$idDemande,$member){

        switch ($member) {
            case 'me':
                $demande = Demande::whereId($idDemande)->first();
                $demande->processor_id = Auth::user()->id;
                $demande->statut_id = 4;
                $demande->save();
                Session::flash('alert-success', "Demande prise en charge par moi-même");
                return redirect('/listDemande/equipe/created_at');
                break;
            case 'member':
                $demande = Demande::whereId($idDemande)->first();
                $user = User::whereId($request->input('member'))->first();
                $demande->processor_id = $request->input('member');
                $demande->statut_id = 4;
                $demande->save();
                Session::flash('alert-success', "Demande prise en charge par ".$user->firstname." ".$user->lastname);
                return redirect('/listDemande/equipe/created_at');
                break;
            default:
                Session::flash('alert-danger', "Erreur");
                return redirect('/listDemande/equipe/created_at');
        }
    }
}
