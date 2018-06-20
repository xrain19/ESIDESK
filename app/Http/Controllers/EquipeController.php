<?php

namespace App\Http\Controllers;

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
    protected function createEquipe(Request $request)
    {
        return Equipe::create([
            'name' => $request->input('name'),
            'manager_id' => $request->input('utilisateur'),
        ]);
    }

    public function show() {
        $rolesEquipes = array();
        $rolesEquipes['utilisateurs'] = Role::all()->sortBy('name');

        return view('equipe', ['rolesEquipes' => $rolesEquipes]);
    }
}