@extends('layouts.template')

@section('breadcrumb')
    <li class="breadcrumb-item active">Ajouter un nouvelle utilisateur</li>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Ajouter un collaborateur') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('createUser') }}"
                              aria-label="{{ __('Ajouter un utilisateur') }}">

                            <div class="form-group row">
                                <label for="lastname"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                                <div class="col-md-6">
                                    <input id="lastname" type="text"
                                           class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}"
                                           name="lastname" value="{{ old('lastname') }}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="firstname"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Prénom') }}</label>

                                <div class="col-md-6">
                                    <input id="firstname" type="text"
                                           class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}"
                                           name="firstname" value="{{ old('firstname') }}" required>

                                    @if ($errors->has('firstname'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            @csrf

                            <div class="form-group row">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                           name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Confirmez le mot de passe') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="role_id"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>
                                <div class="col-md-6">
                                    <select name="role_id" class="form-control" id="role_id">
                                        @foreach ($rolesEquipes['roles'] as $role)
                                            <option value="{{ $role->id}}" @if($role->name == 'Simple utilisateur')
                                            selected
                                                    @endif>{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="equipe_id"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Equipe') }}</label>
                                <div class="col-md-6">
                                    <select name="equipe_id" class="form-control" id="equipe_id">
                                        @foreach ($rolesEquipes['equipes'] as $equipe)
                                            <option value="{{ $equipe->id}}">{{ $equipe->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Enregister') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
