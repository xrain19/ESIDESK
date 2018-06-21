@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if(Auth::user()->role->name == 'Administrateur')
                <div class="card-header">{{ __('Modifier les informations' . $data['user']->email) }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ url('/editUser/' . $data['user']->id) }}" aria-label="{{ __('Ajouter un utilisateur') }}">
                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ $data['user']->lastname }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('Prénom') }}</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ $data['user']->firstname }}" required>

                                @if ($errors->has('firstname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $data['user']->email }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        @elseif(Auth::user()->role->name != 'Administrateur')
                            <div class="card-header">{{ __('Changer son mot de passe') }}</div>
                            <div class="card-body">
                            <form method="POST" action="{{ route('/editUser/' . $data['user']->id) }}" aria-label="{{ __('Changer son mot de passe') }}">
                        @endif

                        @csrf

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Nouveau mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        @if(Auth::user()->role->name == 'Administrateur')
                        <div class="form-group row">
                            <div class="col-md-6">
                                {!!Form::Label('role', 'Role:')!!}
                                {!!Form::select('role', array_pluck($data['roles'], 'name', 'id'), ['class' => 'form-control'])!!}
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                {!!Form::Label('equipe', 'Equipe:')!!}
                                {!!Form::select('equipe', array_pluck($data['equipes'], 'name', 'id'), ['class' => 'form-control'])!!}
                            </div>
                        </div>
                        @endif

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('enregister') }}
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
