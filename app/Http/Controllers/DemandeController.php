<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Equipe;
use App\Statut;
use App\Demande;
use Auth;

#'descriptions', 'urgency', 'closed', 'desired_date', 'status', 'processor_id', 'processing_date', 'title', 'user_id', 'equipe_id', 'statuts_id'

class DemandeController extends Controller
{

    protected function createUser(Request $request)
    {
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
                'equipe_id' => $request->input('equipe_id'),
            ]);

            Session::flash('alert-success', "Demande " . $request->input('title') . " créé avec succès" );
            return redirect('/home');
    }
}
