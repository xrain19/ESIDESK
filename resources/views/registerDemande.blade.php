@extends('layouts.template')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __("Faire une demande à l'équipe " . $data['equipe']->name . ", catégorie : " . $data['cat']->name  ) }}</div>
                    <div class="card-body">

                        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                            @if (Session::has('alert-' . $msg))
                                <div class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</div>
                            @endif
                        @endforeach

                        <form method="POST" action="{{ url('/createDemande/' . $data['cat']->id) }}"
                              aria-label="{{ __('Créer une Demande') }}">

                            @csrf

                            <div class="form-group row">
                                <label for="title"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Titre') }}</label>
                                <div class="col-md-6">
                                    <input id="title" type="text"
                                           class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                                           name="title" value="{{ old('title') }}" required autofocus>
                                </div>
                            </div>

                            @if ($errors->has('titre'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                            @endif

                            <div class="form-group row">
                                <label for="desired_date"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Date désirée') }}</label>
                                <div class="col-md-6">
                                    <input id="desired_date" type="date" class="form-control" name="desired_date"
                                           value="{{ old('desired_date')}}">

                                    @if ($errors->has('desired_date'))
                                        <span class="red-text">
                                        <strong>{{ $errors->first('desired_date') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="description"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
                                <div class="col-md-6">
                                    <textarea id="description"
                                              class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                                              name="description" rows="6" required>{{ old('description') }}</textarea>

                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="urgency"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Urgence') }}</label>
                                <div class="col-md-6">
                                    <select name="urgency" id="urgency">
                                        <option value=1>Forte</option>
                                        <option value=2>Moyenne</option>
                                        <option value=3>Faible</option>
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
