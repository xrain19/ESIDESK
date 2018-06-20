<?php

namespace App\Http\Controllers;

use App\User;
use App\role;
use App\equipe;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class UserController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'lastname' => 'required|string|',
        ]);
    }

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
        if(Auth::user()->role->name == 'Administrateur') {
            $rolesEquipes = array();
            $rolesEquipes['roles'] = Role::all()->sortBy('name');
            $rolesEquipes['equipes'] = Equipe::all()->sortBy('name');

            return view('register', ['rolesEquipes' => $rolesEquipes]);
        }else
        {
            return redirect('/home');
        }
    }
}
