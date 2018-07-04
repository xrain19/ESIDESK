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
    private $messages;

    public function __construct()
    {

        $this->messages = ([
            'firstname.required' => 'Le prénom est requis',
            'firstname.max' => 'Le prénom ne peut pas dépacer 30 caractères',
            'name.required' => 'Le nom est requis',
            'name.max' => 'Le prénom ne peut pas dépacer 30 caractères',
            'email.required' => "L'email est requis",
            'email.email' => "L'email n'est pas au bon format",
            'email.unique' => "L'email est déjà utilisé",
            'paassword.required' => "Le mot de passe est requis",
            'password.min' => "Le mot de passe doit comporter au moins 6 caractères",
            'password.confirmed' => "Les mots de passes sont différents",
        ]);
    }

    public function showAdminUsers($actived)
    {
        if (Auth::user()->role->name != 'Administrateur') {
            Session::flash('alert-danger', "Vous ne diposez pas des droits pour accéder à cette page");
            return redirect('/home');
        }

        switch ($actived) {
            case 'true':
                $data['users'] = User::whereActived(true)->orderBy('lastname')->paginate(5);
                break;
            case 'false':
                $data['users'] = User::whereActived(false)->orderBy('lastname')->paginate(5);
                break;
            default:
                Session::flash('alert-danger', "Liste utilisateur introuvable");
                return redirect('/home');
        }

        $data['from'] = $actived;
        return view('adminUsers', ['data' => $data]);
    }

    public function showEditForm(int $id)
    {
        $data = array();
        if (Auth::user()->role->name == 'Administrateur') {
            $user = User::whereId($id)->first();
            if ($user == null) {
                Session::flash('alert-danger', "Utilisateur introuvable");
                return redirect('/home');
            }
            $data['roles'] = Role::all()->sortBy('id');
            $data['equipes'] = Equipe::all()->sortBy('id');
            $data['user'] = $user;

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
        $user = User::whereId($id)->first();

        if ($user == null) {
            Session::flash('alert-danger', "Utilisateur introuvable");
            return redirect('/home');
        }

        if (Auth::user()->role->name == 'Administrateur') {

            $rules = ([
                'firstname' => 'required|string|max:30',
                'email' => 'required|string|email|max:30',
                'password' => 'string|min:6|nullable|confirmed',
                'lastname' => 'required|string|',
                'role_id' => 'required',
                'equipe_id' => 'required',
            ]);

            $this->validate($request, $rules, $this->messages);

            $user->firstname = $request->input('firstname');
            $user->lastname = $request->input('lastname');
            if ($request->input('password') != null) {
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
            Session::flash('alert-success', "L'utilisateur " . $request->input('email') . " modifié avec succès");
            return redirect('/adminUsers');

        } elseif ($id == Auth::user()->id) {

            $rules = ([
                'password' => 'required|string|min:6|confirmed',
            ]);

            $this->validate($request, $rules, $this->messages);

            $user = User::whereId($id)->first();
            $user->password = Hash::make($request->input('password'));
            $user->save();
            Session::flash('alert-success', "Mot de passe modifié avec succès");
            return redirect('/home');
        }
        Session::flash('alert-danger', "Vous ne diposez pas des droits pour accéder à cette page");
        return redirect('/home');
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

    protected function createUser(Request $request)
    {
        if (Auth::user()->role->name == 'Administrateur') {

            $rules = ([
                'firstname' => 'required|string|max:30',
                'email' => 'required|string|email|max:30|unique:users',
                'password' => 'required|string|min:6|confirmed',
                'lastname' => 'required|string|',
                'role_id' => 'required',
                'equipe_id' => 'required',
            ]);

            $this->validate($request, $rules, $this->messages);

            $user = User::create([
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'lastname' => $request->input('lastname'),
                'firstname' => $request->input('firstname'),
                'role_id' => $request->input('role_id'),
                'equipe_id' => $request->input('equipe_id' ),
            ]);

            Session::flash('alert-success', "L'utilisateur " . $request->input('email') . " créé avec succès");
            return redirect('/adminUsers');
        } else {
            Session::flash('alert-danger', "Vous ne diposez pas des droits pour accéder à cette page");
            return redirect('/home');
        }
    }

    protected function activedUser($id, $action)
    {
        if (Auth::user()->role->name != 'Administrateur') {
            Session::flash('alert-danger', "Vous ne diposez pas des droits pour accéder à cette page");
            return redirect('/home');
        }

        $user = User::whereId($id)->first();
        if ($user == null) {
            Session::flash('alert-danger', "Utilisateur introuvable");
            return redirect('/home');
        }

        switch ($action){
            case 'activate':
                $user->actived = true;
                $msg = " activé";
                $url = "/adminUsers/false";
                break;

            case 'deactivate' :
                $user->actived = false;
                $msg = " désactivé";
                $url = "/adminUsers/true";
                break;

            default:
                Session::flash('alert-danger', "Action introuvable");
                return redirect('/home');
        }

        $user->save();
        Session::flash('alert-success', "L'utilisateur " . $user->email . $msg . " avec succès");
        return redirect($url);
    }
}