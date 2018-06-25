<?php

namespace App\Http\Controllers;

use App\User;
use App\role;
use App\equipe;
use Auth;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function search()
    {
        if (Auth::user()->role->name != 'Administrateur')
        {
            Session::flash('alert-danger', "Vous ne diposez pas des droits pour accéder à cette page");
            return redirect('/home');
        }
            $string = request('q');
            $users = User::where('lastname', 'LIKE', '%' . $string .'%')->orderBy('lastname');
            if($users == null) {
                session()->flash('alert-danger', 'Aucun résultat');
            }else {
                $data['users'] = $users;
                return view('adminUsers', ['data' => $data]);
            }
    }

    public function showAdminUsers()
    {
        if (Auth::user()->role->name != 'Administrateur')
        {
            Session::flash('alert-danger', "Vous ne diposez pas des droits pour accéder à cette page");
            return redirect('/home');
        }

        $data['users'] = User::all()->sortBy('lastname');
        return view('adminUsers', ['data' => $data]);
    }


    protected function createUser(Request $request)
    {
        if (Auth::user()->role->name == 'Administrateur') {
            $validatedData = $request->validate([
                'firstname' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed',
                'lastname' => 'required|string|',
                'role_id' => 'required',
                'equipe_id' => 'required',
            ]);

            $user = User::create([
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'lastname' => $request->input('lastname'),
                'firstname' => $request->input('firstname'),
                'role_id' => $request->input('role_id'),
                'equipe_id' => $request->input('equipe_id'),
            ]);

            Session::flash('alert-success', "L'utilisateur " . $request->input('email') . " créé avec succès" );
            return redirect('/adminUsers');
        } else {
            Session::flash('alert-danger', "Vous ne diposez pas des droits pour accéder à cette page");
            return redirect('/home');
        }
    }

    public function showForm()
    {
        if (Auth::user()->role->name == 'Administrateur') {
            $rolesEquipes = array();
            $rolesEquipes['roles'] = Role::all()->sortBy('name');
            $rolesEquipes['equipes'] = Equipe::all()->sortBy('name');

            return view('registerUser', ['rolesEquipes' => $rolesEquipes]);
        } else {
            Session::flash('alert-danger', "Vous ne diposez pas des droits pour accéder à cette page");
            return redirect('/home');
        }
    }

    public function showEditForm(int $id)
    {
        $data = array();
        if (Auth::user()->role->name == 'Administrateur') {
            $data['roles'] = Role::all()->sortBy('id');
            $data['equipes'] = Equipe::all()->sortBy('id');
            $data['user'] = User::whereId($id)->first();

            return view('editUser', ['data' => $data]);
        } elseif ($id == Auth::user()->id) {
            $data['user'] = User::whereId($id)->first();
            return view('editUser', ['data' => $data]);
        }

        Session::flash('alert-danger', "Vous ne diposez pas des droits pour accéder à cette page");
        return redirect('/home');
    }

    public function editUser(request $request, int $id)
    {
        if (Auth::user()->role->name == 'Administrateur') {
                $validator = \Validator::make($request->all(), [
                    'firstname' => 'required|string|max:255',
                    'email' => 'required|string|email|max:255',
                    'lastname' => 'required|string|',
                    'role_id' => 'required|integer|',
                    'equipe_id' => 'required|integer|',
                ]);

                if ($validator->fails()) {
                    return redirect('/editUserForm/' . $id)
                        ->withInput()
                        ->withErrors($validator);
                }

            $user = User::whereId($id)->first();

            $user->firstname = $request->input('firstname');
            $user->lastname = $request->input('lastname');
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
