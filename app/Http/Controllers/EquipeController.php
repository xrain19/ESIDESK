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

        Equipe::create([
            'name' => $request->get('nameTeam'),
            'manager_id' => $request->get('manager')
        ]);

       return redirect('/home');
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
       foreach ( $equipes as $equipe){
           dd($equipe->manager);
       }
        return view('equipe',array('equipes' => $equipes));
    }
}