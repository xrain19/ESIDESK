@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
<<<<<<< HEAD:resources/views/auth/register2.blade.php
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
=======
                @if(Request::path() ==  'registerUserForm')
                <div class="card-header">{{ __('Ajouter un collaborateur') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('createUser') }}" aria-label="{{ __('Ajouter un utilisateur') }}">
                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('Prénom') }}</label>
>>>>>>> EEI:resources/views/register.blade.php

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

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
                            <form method="POST" action="{{ route('editUser') }}" aria-label="{{ __('Changer son mot de passe') }}">
                    @endif

                        @csrf

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
<<<<<<< HEAD:resources/views/auth/register2.blade.php
=======
                        @if(Auth::user()->role->name == 'Administrateur')
                        <div class="form-group row">
                            <div class="col-md-6">
                                {!!Form::Label('role', 'Role:')!!}
                                {!!Form::select('role', array_pluck($rolesEquipes['roles'], 'name', 'id'), ['class' => 'form-control'])!!}
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                {!!Form::Label('equipe', 'Equipe:')!!}
                                {!!Form::select('equipe', array_pluck($rolesEquipes['equipes'], 'name', 'id'), ['class' => 'form-control'])!!}
                            </div>
                        </div>
                        @endif
>>>>>>> EEI:resources/views/register.blade.php

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
