@extends('layouts.template')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @if(Auth::user()->role->name == 'Administrateur')
                        <div class="card-header">{{ __('Modifier les informations de : ' . $data['user']->email) }}</div>
                        <div class="card-body">
                            <form method="POST" action="{{ url('/editUser/' . $data['user']->id) }}"
                                  aria-label="{{ __('Modifier les informations') }}">
                                <div class="form-group row">
                                    <label for="lastname"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                                    <div class="col-md-6">
                                        <input id="lastname" type="text"
                                               class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}"
                                               name="lastname" value="{{ $data['user']->lastname }}" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="firstname"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Prénom') }}</label>

                                    <div class="col-md-6">
                                        <input id="firstname" type="text"
                                               class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}"
                                               name="firstname" value="{{ $data['user']->firstname }}" required>

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
                                               name="email" value="{{ $data['user']->email }}" required>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Nouveau mot de passe') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                               class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                               name="password">
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
                                               name="password_confirmation">
                                    </div>
                                </div>

                                @else
                                    <div class="card-header">{{ __('Changer son mot de passe') }}</div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ url('/editUser/' . $data['user']->id) }}"
                                              aria-label="{{ __('Changer son mot de passe') }}">
                                            <div class="form-group row">
                                                <label for="password"
                                                       class="col-md-4 col-form-label text-md-right">{{ __('Nouveau mot de passe') }}</label>

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
                                            @endif

                                            @csrf

                                            @if(Auth::user()->role->name == 'Administrateur')
                                                <div class="form-group row">
                                                    <label for="role_id"
                                                           class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>
                                                    <div class="col-md-6">
                                                        <select name="role_id" class="form-control" id="role_id">
                                                            @foreach ($data['roles'] as $role)
                                                                @if($data['user']->role_id == $role->id)
                                                                    <option value="{{ $role->id }}"
                                                                            selected>{{ $role->name }}</option>
                                                                @else
                                                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="equipe_id"
                                                           class="col-md-4 col-form-label text-md-right">{{ __('Equipe') }}</label>
                                                    <div class="col-md-6">
                                                        <select name="equipe_id" class="form-control" id="equipe_id">
                                                            @foreach ($data['equipes'] as $equipe)
                                                                @if($data['user']->equipe_id == $equipe->id)
                                                                    <option value="{{ $equipe->id }}"
                                                                            selected>{{ $equipe->name }}</option>
                                                                @else
                                                                    <option value="{{ $equipe->id }}">{{ $equipe->name }}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            @endif

                                            <div class="form-group row mb-0">
                                                <div class="col-md-6 offset-md-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('Enregister') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
@endsection
