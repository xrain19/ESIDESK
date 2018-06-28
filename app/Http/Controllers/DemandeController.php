<?php

namespace App\Http\Controllers;

use App\Equipe;
use Illuminate\Http\Request;

use App\Demande;
use App\Categorie;
use Auth;
use Session;

#'descriptions', 'urgency', 'closed', 'desired_date', 'status', 'processor_id', 'processing_date', 'title', 'user_id', 'equipe_id', 'statuts_id'

class DemandeController extends Controller
{

    protected function listDemande($list)
    {

    }

    protected function createDemande(Request $request, $id)
    {
        $cat = Categorie::whereId($id)->first();
        if($cat == null){
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

        if($cat == null){
            Session::flash('alert-danger', "Catégorie introuvable");
            return redirect('/home');
        }

        $equipe = Equipe::whereId($cat->equipe_id)->first();

        $data = array();
        $data['cat'] = $cat;
        $data['equipe'] = $equipe;
        return view('registerDemande', ['data' => $data]);
    }
}
