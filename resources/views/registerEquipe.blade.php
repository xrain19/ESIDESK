@extends('layouts.template')

@section('content')
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

{{--                        <div class="form-group row">
                            <label for="nameTeam" class="col-md-4 col-form-label text-md-right">{{ __('Utilisateur') }}</label>
                            <div class="col-md-6">
                                <div class="-align-center">

                                    <select class="custom-select" id="user" name="user" multiple="multiple">
                                        @foreach ($users as $user)
                                            @foreach($user as $item)
                                                <option value="{{ $item->id }}" >{{ $item->lastname }}</option>
                                            @endforeach
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                        </div>--}}

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

@section('script')
    <script>
        $('#user').multiselect({
            templates: {
                li: '<li><a href="javascript:void(0);"><label class="pl-2"></label></a></li>'
            },
            nonSelectedText: '-- Sélectionnez --'
        });
    </script>
@endsection
