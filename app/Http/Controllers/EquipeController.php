<?php

namespace App\Http\Controllers;

use App\role;
use App\equipe;
use App\User;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Equipe Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new team as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */


    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
        ]);
    }

    /**
     * Create a new team instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Equipe
     */
    protected function createEquipe(Request $request){


        $manager = User::whereId($request->input('manager'))->first();

        //Check si l'équipe éxiste déja
        $equipeExist = Equipe::whereName($request->get('nameTeam'))->first();

        $managerInfo = User::whereId($request->get('manager'))->first();
        if($managerInfo->equipe_id !== null){
            $equipeInfo = Equipe::whereId($managerInfo->equipe_id)->first();
            if($equipeInfo->manager_id === $managerInfo->id){
                Session::flash('alert-danger', "Le manager " . $managerInfo->firstname." ".$managerInfo->lastname . " est déjà manager d'une autre équipe" );
                $users['users'] = User::all();
                return view('registerEquipe', ['users' => $users]);

            }
        }

        if($equipeExist === null){
            $equipe = Equipe::create([
                'name' => $request->get('nameTeam'),
                'manager_id' => $request->get('manager')
            ]);

            $manager->equipe_id = $equipe->id;
            $manager->save();

            if($request->input('user') != null) {
                foreach ($request->input('user') as $member) {
                    $user = User::whereId($member)->first();
                    $user->equipe_id = $equipe->id;
                    $user->save();
                }
            }

                Session::flash('alert-success', "L'équipe " . $request->input('nameTeam') . " a bien été crée   ." );
                return redirect('/homeEquipe');
            }
        else{
            Session::flash('alert-danger', "L'équipe " . $request->input('nameTeam') . " éxiste déja." );
            $users['users'] = User::all();
            return view('registerEquipe', ['users' => $users]);
        }
    }

    public function showForm() {
        $users = array();
        $users['users'] = User::all();
        return view('registerEquipe', ['users' => $users]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function homeEquipe()
    {
       $equipes = Equipe::all()->where('actived',true);
        return view('equipe',array('equipes' => $equipes));
    }

    public function showEditForm(int $id)
    {
        $data = array();
        $data['equipe'] = Equipe::whereId($id)->first();
        $manager = User::whereId($data['equipe']->manager_id)->first();

        //Manager de l'équipe
        $data['manager'] = $manager;

        //Liste de tous les utilisateurs
        $data['users'] = User::all()->sortBy('id');

        //Liste des membres de l'équipe
        $data['members'] = User::whereEquipeId($id)->get();

        //Liste de la différente entre member et user
        $data['diff'] = $data['users']->diff( $data['members']);

        //Supprimer le manager si présent
        foreach ($data['users'] as $key => $user){

            if($data['manager']->id == $user->id){
                unset($data['users'][$key]);
            }

            foreach ($data['members'] as $k => $member){
                if($data['manager']->id == $member->id){
                    unset($data['members'][$k]);
                }
            }
        }

        return view('editEquipe', ['data' => $data]);
    }

    public function editEquipe(request $request, int $id)
    {

            $validator = \Validator::make($request->all(), [
                'name' => 'required|string|max:255'
            ]);

            if ($validator->fails()) {
                return redirect('/editEquipeForm/' . $id)
                    ->withInput()
                    ->withErrors($validator);
            }

            $equipe = Equipe::whereId($id)->first();

            if ($equipe->name != $request->input('name')) {
                if (Equipe::whereName($request->input('name'))->first()) {
                    Session::flash('alert-danger', 'Ce nom est déjà utilisé');
                    return redirect('/editEquipeForm/' . $id);
                }
                $equipe->name = $request->input('name');
            }
            $equipe->manager_id = $request->input('manager');

            //Sauvegarde du manager
            $manager = User::whereId($request->input('manager'))->first();
            $manager->equipe_id = $equipe->id;
            $manager->save();

            if($request->input('user') != NULL){
                //Sauvegarde de la liste d'utilisateur
                foreach ($request->input('user') as $member){
                    $user = User::whereId($member)->first();
                    $user->equipe_id = $equipe->id;
                    $user->save();
                }
            }

            $equipe->save();

            Session::flash('alert-success', "L'équipe " . $request->input('name') . " modifié avec succès" );
            return redirect('/homeEquipe');

    }

    public function deleteEquipe(int $id)
    {

       $equipeDisable = Equipe::whereId($id)->first();
       $equipeDisable->actived = false;
       $equipeDisable->manager_id = null;
       $equipeDisable->save();

       $userEquipe = User::whereEquipeId($id)->get();
        foreach ($userEquipe as $user){
            $user->equipe_id = null;
            $user->save();
        }

        Session::flash('alert-success', "L'équipe a été supprimé avec succès" );
        return redirect('/homeEquipe');
    }


}