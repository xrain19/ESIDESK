<?php

namespace App\Http\Controllers;

use App\User;
use App\role;
use App\equipe;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;


class UserController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

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
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'lastname' => 'required|string|',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function createUser(Request $request)
    {
        if(Auth::user()->role->name == 'Administrateur')
        {
            User::create([
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'lastname' => $request->input('lastname'),
                'firstname' => $request->input('firstname'),
                'role_id' => $request->input('role'),
                'equipe_id' => $request->input('equipe'),
            ]);

            return redirect('/home');
        }else
        {
            return redirect('/home');
        }
    }

    public function showForm() {
        $rolesEquipes = array();
        $rolesEquipes['roles'] = Role::all()->sortBy('name');
        $rolesEquipes['equipes'] = Equipe::all()->sortBy('name');

        return view('register', ['rolesEquipes' => $rolesEquipes]);
    }
}
