@extends('layouts.template')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <h4>{{ __("Demande : " . $data['demande']->title . ", Id :" . $data['demande']->id) }}</h4>
                            @if(Auth::user()->id ==  $data['demande']->user->id and  $data['demande']->statut->name == 'En attente de validation')
                                <a href={{url('/editDemandeForm/' .  $data['demande']->id)}}  class="table-link"
                                   style="margin-left: 2em">
                                            <span class="fa-stack">
                                                <i class="fa fa-square fa-stack-2x"></i>
                                                <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                            </span>
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="card-body">
                        <h5>Description : </h5>
                        <p id="description" class="card-text text-body">{!! $data['demande']->description !!}</p>
                        <strong>Statut : </strong>
                        <span><strong> {{$data['demande']->statut->name}}</strong></span>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            Demandeur : {{$data['demande']->user->firstname . " " . $data['demande']->user->lastname}}
                        </div>
                        <div class="row">
                            Equipe : {{$data['demande']->user->equipe->name}}
                        </div>
                        <div class="row">
                            Date de Création : {{date('d-m-Y à H', strtotime($data['demande']->created_at))}}h
                        </div>
                        <div class="row">
                            Date souhaitée : {{date('d-m-Y', strtotime($data['demande']->desired_date))}}
                        </div>
                        </br>
                        @if($data['demande']->processor_id == null and $data['demande']->equipe_id == Auth::user()->equipe_id)
                            <div class="row-1">
                                @if($data['demande']->validated == true)
                                    <a href='{{ url('/addMemberDemande/'. $data['demande']->id .'/me') }}'
                                       class="btn btn-primary">Prendre en charge la demande</a>
                                @endif
                                @if( (Request::session()->get('manager') == true or Auth::user()->role->name == 'Administrateur') and $data['demande']->validated == false and  $data['demande']->closed == false)
                                    <a href='{{url('validerDemande/'. $data['demande']->id .'/OK')}}'
                                       class="btn btn-primary btn-outline-success">Valider la demande</a>
                                    <a href='{{url('validerDemande/'. $data['demande']->id.'/KO')}}'
                                       class="btn btn-primary btn-outline-danger">Refuser la demande</a>
                                @endif
                            </div>
                    </div>
                    @if($data['demande']->validated == true and Request::session()->get('manager') == true)
                        <div class="card-footer">
                            <form method="POST" action="{{ url('/addMemberDemande/'. $data['demande']->id.'/member') }}"
                                  aria-label="{{ __('Ajouter un utilisateur') }}">
                                @csrf
                                <div class="form-group row">
                                    <label for="member"
                                           class="col-md-3 col-form-label text-md-right">{{ __('Membre d\'équipe') }}</label>
                                    <div class="col-md-5">
                                        <div class="-align-center">
                                            {!!Form::select('member',array_pluck($data['member'], 'lastname', 'id'),null, ['class' => 'form-control'])!!}
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Enregister') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
