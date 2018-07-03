<?php

namespace App\Http\Controllers;

use App\Commentaire;
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

    private $rules;
    private $messages;

    public function __construct()
    {
        $this->rules = ([
            'description' => 'required|string',
            'desired_date' => 'required|date',
            'title' => 'required|string|max:30',
        ]);

        $this->messages = ([
            'description.required' => 'La description est requise',
            'desired_date.date' => "La date n'est pas au bon format",
            'desired_date.required' => "La date est requise",
            'title.required' => 'Le titre est requis',
            'title.max' => 'le titre ne peut pas dépacer 30 caractères',
            'commentaire.required' => 'Le commentaire est requis',
        ]);
    }

    protected function editDemande(request $request, $id)
    {
        $demande = Demande::whereId($id)->first();

        if ($demande == null) {
            Session::flash('alert-danger', "Demande introuvable");
            return redirect('/home');
        }

        $user = Auth::user();

        if ($demande->user_id != $user->id and $user->role->name) {
            Session::flash('alert-danger', "Vous ne diposez pas des droits pour accéder à cette page");
            return redirect('/home');
        }

        $statut = $demande->statut->name;

        if ($statut != "En attente de validation") {
            Session::flash('alert-danger', "la demande est " . $statut . ", vous ne pouvez pas la modifier");
            return redirect('/home');
        }

        $this->validate($request, $this->rules, $this->messages);

        $demande->description = $request->input('description');
        $demande->urgency = $request->input('urgency');
        $demande->desired_date = $request->input('desired_date');
        $demande->title = $request->input('title');

        $demande->save();
        return redirect("/detailsDemande/" . $id);
    }

    protected function showEditForm($id)
    {
        $demande = Demande::whereId($id)->first();

        if ($demande == null) {
            Session::flash('alert-danger', "Demande introuvable");
            return redirect('/home');
        }

        $user = Auth::user();

        if ($demande->user_id != $user->id) {
            Session::flash('alert-danger', "Vous ne diposez pas des droits pour accéder à cette page");
            return redirect('/home');
        }

        $statut = $demande->statut->name;

        if ($statut != "En attente de validation") {
            Session::flash('alert-danger', "la demande est " . $statut . ", vous ne pouvez pas la modifier");
            return redirect('/home');
        }

        $equipe = Equipe::whereId($demande->equipe_id)->first();

        $data = array();
        $data['demande'] = $demande;
        $data['equipe'] = $equipe;
        return view('editDemande', ['data' => $data]);
    }

    protected function detailsDemande($id)
    {
        $demande = Demande::whereId($id)->first();
        $user = User::whereEquipeId($demande->equipe_id)->get();
        if ($demande == null) {
            Session::flash('alert-danger', "Demande introuvable");
            return redirect('/home');
        }
        if ($user == NULL) {
            Session::flash('alert-danger', "L'utilisateur n'appartient à aucune équipe");
            return redirect('/home');
        }
        $commentaires = Commentaire::whereDemandeId($demande->id)->get();
        if ($commentaires->isNotEmpty()) {
            foreach ($commentaires as $k => $commentaire) {
                $data['commentaires'][$k] = $commentaire;
            }
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
                if ($equipe == NULL) {
                    Session::flash('alert-danger', "Vous n'appartenez à aucune équipe");
                    return redirect('/home');
                }
                $demandes = Demande::whereEquipeId($equipe->id)->whereClosed(false)->whereProcessorId(NULL)->orderBy($tri)->get();
                if ($demandes->isEmpty()) {
                    Session::flash('alert-danger', "Aucunes demandes à traiter");
                    return redirect('/home');
                }
                $data['title'] = "Demande de l'équipe" . $equipe->name;
                break;

            case 'refus':
                $equipe = Equipe::whereId(Auth::user()->equipe_id)->first();
                if ($equipe == NULL) {
                    Session::flash('alert-danger', "L'utilisateur n'appartient à aucune équipe");
                    return redirect('/home');
                }
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
                $demandes = Demande::whereUserId(Auth::user()->id)->orderByDesc($tri)->get();
                if ($demandes->isEmpty()) {
                    Session::flash('alert-danger', "Aucunes demandes");
                    return redirect('/home');
                }
                foreach ($demandes as $k => $demande) {
                    if ($demande->processor_id != NULL) {
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

            case 'plus' :
                $demandes = Demande::whereUserId(Auth::user()->id)->whereStatutId(6)->get();
                if ($demandes->isEmpty()) {
                    Session::flash('alert-danger', "Aucunes demandes");
                    return redirect('/home');
                }
                $data['title'] = "Demandes en attente de précision";
                break;

            default:
                Session::flash('alert-danger', "Liste de demandes introuvable");
                return redirect('/home');
        }
        $data['from'] = $list;
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

        $this->validate($request, $this->rules, $this->messages);

        Demande::create([
            'description' => $request->input('description'),
            'urgency' => $request->input('urgency'),
            'desired_date' => $request->input('desired_date'),
            'title' => $request->input('title'),
            'user_id' => Auth::user()->id,
            'equipe_id' => $cat->equipe_id,
            'categorie_id' => $id,
            'statut_id' => 1,
        ]);

        Session::flash('alert-success', "Demande \"" . $request->input('title') . "\" créé avec succès");
        return redirect('/listDemande/mine/created_at');
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

    protected function validerDemande($id, $validator)
    {
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
            case 'PLUS' :
                $demande = Demande::whereId($id)->first();
                $demande->statut_id = 6;
                $demande->save();
                Session::flash('alert-success', "Demande de précision envoyé au collaborateur");
                return redirect('/listDemande/equipe/created_at');
                break;
            default:
                Session::flash('alert-danger', "Erreur");
                return redirect('/listDemande/equipe/created_at');
        }

    }

    protected function addMemberDemande(Request $request, $idDemande, $member)
    {

        switch ($member) {
            case 'me':
                $demande = Demande::whereId($idDemande)->first();
                $demande->processor_id = Auth::user()->id;
                $demande->statut_id = 4;
                $demande->save();
                Session::flash('alert-success', "Demande prise en charge par moi-même");
                return redirect('/listDemande/inprogress/desired_date');
                break;
            case 'member':
                $demande = Demande::whereId($idDemande)->first();
                $user = User::whereId($request->input('member'))->first();
                $demande->processor_id = $request->input('member');
                $demande->statut_id = 4;
                $demande->save();
                Session::flash('alert-success', "Demande prise en charge par " . $user->firstname . " " . $user->lastname);
                return redirect('/listDemande/equipe/created_at');
                break;
            default:
                Session::flash('alert-danger', "Erreur");
                return redirect('/listDemande/equipe/created_at');
        }
    }

    protected function addCommentaireDemande(Request $request,$idDemande,$info){

        switch ($info) {
            case 'one':
                $demande = Demande::whereId($idDemande)->first();
                if ($demande == null) {
                    Session::flash('alert-danger', "Demande introuvable");
                    return redirect('/home');
                }

                $this->validate($request, $this->messages);

                Commentaire::create([
                    'commentaire' => $request->input('commentaire'),
                    'user_id' => Auth::user()->id,
                    'demande_id' => $idDemande,
                ]);

                $demande->statut_id = 1;
                $demande->save();

                Session::flash('alert-success', "Commentaire ajouté à la demande" . $demande->title . "avec succès");
                return redirect('/home');
                break;
            case 'more':
                $demande = Demande::whereId($idDemande)->first();
                if ($demande == null) {
                    Session::flash('alert-danger', "Demande introuvable");
                    return redirect('/home');
                }

                $this->validate($request, $this->messages);

                Commentaire::create([
                    'commentaire' => $request->input('commentaire'),
                    'user_id' => Auth::user()->id,
                    'demande_id' => $idDemande,
                ]);

                $demande->statut_id = 6;
                $demande->save();

                Session::flash('alert-success', "Demande de précision envoyé au collaborateur avec commentaire");
                return redirect('/listDemande/equipe/created_at');
                break;
            default:
                Session::flash('alert-danger', "Erreur");
                return redirect('/listDemande/equipe/created_at');
        }


    }

    protected function cloturerDemande(Request $request,$idDemande){

        $demande = Demande::whereId($idDemande)->first();
        if ($demande == null) {
            Session::flash('alert-danger', "Demande introuvable");
            return redirect('/home');
        }

        Commentaire::create([
            'commentaire' => $request->input('commentaire'),
            'user_id' => Auth::user()->id,
            'demande_id' => $idDemande,
        ]);

        $demande->statut_id = 5;
        $demande->closed = 1;
        $demande->processing_date = date("Y/m/d");
        $demande->save();

        Session::flash('alert-success', "Cloture de la demande " . $demande->title . " avec succès");
        return redirect('/dashboard');
    }
}
