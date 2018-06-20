@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ajouter une équipe') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('createEquipe') }}" aria-label="{{ __('Ajouter une équipe') }}">

                        @csrf

                        <div class="form-group row">
                            <label for="nameTeam" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="nameTeam" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="nameTeam" value="{{ old('name') }}" required autofocus>
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('Prénom') }}</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ old('firstname') }}" required>

                                @if ($errors->has('firstname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

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
