@extends('layouts.template')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ url('/homeEquipe') }}">Liste des équipes</a>
    </li>
    <li class="breadcrumb-item active">Edition d'une équipe</li>
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
                    <div class="card-header">{{ __('Modifier les informations de : ' . $data['equipe']->name) }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ url('/editEquipe/' . $data['equipe']->id) }}" aria-label="{{ __('Modifier les informations') }}">

                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $data['equipe']->name }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="manager" class="col-md-4 col-form-label text-md-right">{{ __('Manager') }}</label>
                                <div class="col-md-6">
                                    <div class="-align-center">
                                        {!!Form::select('manager',[$data['manager']->id => $data['manager']->lastname] + array_pluck($data['users'], 'lastname', 'id'),null, ['class' => 'form-control'])!!}
                                    </div>
                                </div>
                            </div>

                            {{--  <div class="form-group row">
                                  <label for="usertext" class="col-md-4 col-form-label text-md-right">{{ __('Utilisateur') }}</label>
                                  <div class="col-md-6">
                                      <div class="-align-center">
                                          {!! Form::select('user', array_pluck($data['users'], 'lastname', 'id'), null, ['id'=>'user','multiple'=>'multiple','multiselect'=>'multiselect','class'=>'form-control']) !!}
                                      </div>
                                  </div>
                              </div>
  --}}
                            <div class="form-group row">
                                <label for="user" class="col-md-4 col-form-label text-md-right">{{ __('Utilisateur') }}</label>
                                <div class="col-md-6">
                                    <div class="-align-center">
                                        <select id="user" name="user[]" multiple="multiple">
                                            @foreach($data['members'] as $member)
                                                <option value="{{$member->id}}" selected="selected">{{$member->lastname}}</option>
                                            @endforeach
                                            @foreach($data['diff'] as $user)
                                                <option value="{{$user->id}}">{{$user->lastname}}</option>
                                            @endforeach
                                        </select>
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
