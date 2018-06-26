<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use App\equipe;
use Auth;
use Session;

class CategoriesController extends Controller
{
    protected function createCat(Request $request, $id)
    {
        $equipe = Equipe::whereId($id)->first();

        if ($equipe->manager_id != Auth::user()->id) {
            Session::flash('alert-danger', "Vous ne disposez pas des droits pour accéder à cette page");
            return redirect('/home');
        }
        $validatedData = $request->validate([
            'description' => 'required|string',
            'name' => 'required|string',
        ]);

        Categorie::create([
            'description' => $request->input('description'),
            'name' => $request->input('name'),
            'equipe_id' => $id,
        ]);

        Session::flash('alert-success', "Catégorie " . $request->input('name') . " créé avec succès");
        return redirect('/home');
    }

    protected function showForm($id)
    {
        $equipe = Equipe::whereId($id)->first();

        if ($equipe->manager_id != Auth::user()->id) {
            Session::flash('alert-danger', "Vous ne disposez pas des droits pour accéder à cette page");
            return redirect('/home');
        }

        $data = array();
        $data['equipe_id'] = $id;
        return view('createCat', ['data' => $data]);
    }

    protected function showEditForm($id)
    {
        $cat = Categorie::whereId($id)->first();

        if ($cat == null) {
            Session::flash('alert-danger', "Catégorie introuvable");
            return redirect('/home');
        }

        $equipe = Equipe::whereId($cat->equipe_id)->first();

        if ($equipe->manager_id != Auth::user()->id) {
            Session::flash('alert-danger', "Vous ne disposez pas des droits pour accéder à cette page");
            return redirect('/home');
        }

        $data = array();
        $data['cat'] = $cat;
        return view('createCat', ['data' => $data]);
    }

    protected function editCat(Request $request, $id)
    {
        $cat = Categorie::whereId($id)->first();

        if ($cat == null) {
            Session::flash('alert-danger', "Catégorie introuvable");
            return redirect('/home');
        }

        $equipe = Equipe::whereId($cat->equipe_id)->first();

        if ($equipe->manager_id != Auth::user()->id) {
            Session::flash('alert-danger', "Vous ne disposez pas des droits pour accéder à cette page");
            return redirect('/home');
        }

        $cat->name = $request->input('name');
        $cat->descriptions = $request->input('description');
        $cat->save();

        Session::flash('alert-success', "Catégorie " . $request->input('name') . " modifiée avec succès");
        return redirect('/home');
    }
}
