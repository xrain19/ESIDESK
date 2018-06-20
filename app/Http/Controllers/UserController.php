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
    protected function createUser(Request $request)
    {
        if(Auth::user()->role->name == 'Administrateur')
        {
            $validator = \Validator::make($request->all(), [
                'firstname' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed',
                'lastname' => 'required|string|',
                'role_id' => 'required|integer|',
                'equipe_id' => 'required|integer|',
            ]);

            if($validator->fails())
            {
                return redirect('/registerUserForm')
                    ->withInput()
                    ->withErrors($validator);
            }

            $user = User::create([
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'lastname' => $request->input('lastname'),
                'firstname' => $request->input('firstname'),
                'role_id' => $request->input('role'),
                'equipe_id' => $request->input('equipe'),
            ]);

            $msg = "L'utilisateur " .  $request->input('email') . " créé avec succés";

            return redirect('/user/' . $user->id);
        }else
        {
            return redirect('/home');
        }
    }

    public function showForm()
    {
        if(Auth::user()->role->name == 'Administrateur') {
            $rolesEquipes = array();
            $rolesEquipes['roles'] = Role::all()->sortBy('name');
            $rolesEquipes['equipes'] = Equipe::all()->sortBy('name');

            return view('register', ['rolesEquipes' => $rolesEquipes]);
        }else
        {
            \Session::flash('alert-danger', "Seulement l'admnistrateur peut accéder à cette page");
            return redirect('/home');
        }
    }

    public function showEditForm(int $id)
    {
        $data= array();
        if(Auth::user()->role->name == 'Administrateur') {
            $data['roles'] = Role::all()->sortBy('name');
            $data['equipes'] = Equipe::all()->sortBy('name');
            $data['user'] = User::whereId($id)->first();

            return view('register', ['data' => $data]);
        }elseif($id == Auth::user()->id)
        {
            $data['user'] = User::whereId($id)->first();
            return view('register', ['data' => $data]);
        }

        \Session::flash('alert-danger', "Seulement l'admnistrateur peut accéder à cette page");
        return redirect('/home');
    }

    public function editUser(request $request,int $id) {
        if(Auth::user()->role->name == 'Administrateur')
        {
            $validator = \Validator::make($request->all(), [
                'firstname' => 'required|string|max:255',
                'email' => 'required|string|email|max:255',
                'password' => 'required|string|min:6|confirmed',
                'lastname' => 'required|string|',
                'role_id' => 'required|integer|',
                'equipe_id' => 'required|integer|',
            ]);

            if($validator->fails())
            {
                return redirect('/editUserForm/' . $id)
                    ->withInput()
                    ->withErrors($validator);
            }

            $user = User::whereId($id);
            $user->firstname = $request->input('firstname');
            $user->lastname = $request->input('lastname');
            $user->password = $request->input('password');
            $user->role_id = $request->input('role_id');
            $user->equipe_id = $request->input('equipe_id');
            if($user->email != $request->input('email'))
            {
                if(User::whereEmail($request->input('email'))->first())
                {
                    \Session::flash('alert-danger', 'Email déjà utilisé');
                    return redirect('/editUserForm/' . $id);
                }
                $user->email = $request->input('email');
            }
            $user->save();

        }elseif($id == Auth::user()->id)
        {
            $validator = \Validator::make($request->all(), [
                'password' => 'required|string|min:6|confirmed',
            ]);

            if($validator->fails())
            {
                return redirect('/editUserForm/' . $id)
                    ->withInput()
                    ->withErrors($validator);
            }

            $user = User::whereId($id);
            $user->password = $request->input('password');
            $user->save();
        }
        return redirect('/user/' . $id);
    }
}
