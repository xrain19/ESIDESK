<?php

namespace App\Http\Controllers;

use App\role;
use App\equipe;
use App\User;
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
        $equipe = Equipe::create([
            'name' => $request->get('nameTeam'),
            'manager_id' => $request->get('manager')
        ]);

        $manager->equipe_id = $equipe->id;
        $manager->save();

        foreach ($request->input('user') as $member){
            $user = User::whereId($member)->first();
            $user->equipe_id = $equipe->id;
            $user->save();
        }

       return redirect('/homeEquipe');
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
       $equipes = Equipe::all();
        return view('equipe',array('equipes' => $equipes));
    }

    public function showEditForm(int $id)
    {
        $data = array();
        $data['equipe'] = Equipe::whereId($id)->first();
        $manager = User::whereId($data['equipe']->manager_id)->first();
        $data['manager'] = $manager;
        $data['users'] = User::all()->sortBy('id');
        $data['members'] = User::whereEquipeId($id)->get();

        //Supprimer le manager si présent
        foreach ($data['users'] as $key => $user){

            if($data['manager']->id == $user->id){
                unset($data['users'][$key]);
            }

            foreach ($data['members'] as $k => $member){

                if($data['manager']->id != $member->id){
                    if($member->id == $user->id){
                        unset($data['members'][$k]);
                    }
                }
            }
        }

        return view('editEquipe', ['data' => $data]);
    }

    public function editEquipe(request $request, int $id)
    {
        if (Auth::user()->role->name == 'Administrateur') {
            $validator = \Validator::make($request->all(), [
                'name' => 'required|string|max:255'
            ]);

            if ($validator->fails()) {
                return redirect('/editEquipeForm/' . $id)
                    ->withInput()
                    ->withErrors($validator);
            }

            $equipe = Equipe::whereId($id)->first();

            $equipe->name = $request->input('name');
            $user->manager_id = $request->input('lastname');
            if ($request->input('password')) {
                $user->password = Hash::make($request->input('password'));
            }
            $user->role_id = $request->input('role_id');
            $user->equipe_id = $request->input('equipe_id');
            if ($user->email != $request->input('email')) {
                if (User::whereEmail($request->input('email'))->first()) {
                    \Session::flash('alert-danger', 'Email déjà utilisé');
                    return redirect('/editUserForm/' . $id);
                }
                $user->email = $request->input('email');
            }
            $user->save();
            Session::flash('alert-success', "L'utilisateur " . $request->input('email') . " modifié avec succès" );
            return redirect('/adminUsers');

        } elseif ($id == Auth::user()->id) {
            $validator = \Validator::make($request->all(), [
                'password' => 'required|string|min:6|confirmed',
            ]);

            if ($validator->fails()) {
                return redirect('/editUserForm/' . $id)
                    ->withInput()
                    ->withErrors($validator);
            }

            $user = User::whereId($id);
            $user->password = $request->input('password');
            $user->save();
            Session::flash('alert-success', "Mot de passe modifié avec succès");
            return redirect('/home');
        }
        Session::flash('alert-danger', "Vous ne diposez pas des droits pour accéder à cette page");
        return redirect('/home');
    }
}