@extends('layouts.template')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ url('/homeEquipe') }}">Liste des équipes</a>
    </li>
    <li class="breadcrumb-item active">Création d'une équipe</li>
@endsection

@section('content')
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if (Session::has('alert-' . $msg))
            <div class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</div>
        @endif
    @endforeach
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
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
                            <label for="manager" class="col-md-4 col-form-label text-md-right">{{ __('Manager') }}</label>
                            <div class="col-md-6">
                                <div class="-align-center">
                                    {!!Form::select('manager',array_pluck($users['users'], 'lastname', 'id'),null, ['class' => 'form-control'])!!}
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="user" class="col-md-4 col-form-label text-md-right">{{ __('Utilisateur') }}</label>
                            <div class="col-md-6">
                                <div class="-align-center">
                                    {!! Form::select('user[]', array_pluck($users['users'], 'lastname', 'id'), null, ['id'=>'user','multiple'=>'multiple','multiselect'=>'multiselect','class'=>'form-control']) !!}
                                </div>
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

@section('script')
    <script>
        $('#user').multiselect({
            templates: {
                li: '<li><a href="javascript:void(0);"><label class="pl-2"></label></a></li>'
            },
            nonSelectedText: '-- Sélectionnez --',
            maxHeight: 200,
            enableFiltering: true,
            enableCaseInsensitiveFiltering: true,
            filterPlaceholder: 'Recherche',
            buttonWidth: '100%',
            nSelectedText: ' Sélectionnés'
        });
    </script>
@endsection
