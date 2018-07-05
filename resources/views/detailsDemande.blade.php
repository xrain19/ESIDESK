@extends('layouts.template')


@section('breadcrumb')
    <li class="breadcrumb-item active">Demande</li>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-right">
                        @if(Auth::user()->id ==  $data['demande']->user->id and  $data['demande']->statut_id == 1)
                            <a href={{url('/editDemandeForm/' .  $data['demande']->id)}}  class="table-link">
                                            <span class="fa-stack">
                                                <i class="fa fa-square fa-stack-2x"></i>
                                                <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                            </span>
                            </a>
                        @endif
                            <div class="text-center">
                                <h4>{{ __("Demande : " . "\"".$data['demande']->title."\"")}}</h4>
                                <h6>{{ __("Catégorie : ". $data['demande']->categorie->name)}}</h6>
                            </div>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Equipe :</h5>
                        <p id="description" class="card-text text-body">{!! $data['demande']->equipe->name !!}</p>
                        <h5 class="card-title">Description : </h5>
                        <p id="description" class="card-text text-body">{!! $data['demande']->description !!}</p>
                        <strong>Statut : </strong>
                        <span><strong> {{$data['demande']->statut->name}}</strong></span>
                    </div>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><i>Demandeur : </i>{{$data['demande']->user->firstname . " " . $data['demande']->user->lastname}}</li>
                    <li class="list-group-item"><i>Equipe : </i>{{$data['demande']->user->equipe->name}}</li>
                    <li class="list-group-item"><i>Date de Création : </i>{{date('d-m-Y à H', strtotime($data['demande']->created_at))}}h</li>
                    <li class="list-group-item"><i>Date souhaitée : </i>{{date('d-m-Y', strtotime($data['demande']->desired_date))}}</li>
                </ul>
                    @if($data['demande']->processor_id == null and $data['demande']->equipe_id == Auth::user()->equipe_id)
                        @if($data['demande']->validated == true and Request::session()->get('manager') == true)
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                <form method="POST" action="{{ url('/addMemberDemande/'. $data['demande']->id.'/member') }}"
                                              aria-label="{{ __('Ajouter un utilisateur') }}">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="member" class="col-form-label text-md-right">{{ __('Membre d\'équipe') }}</label>
                                        <div class="col-md-5">
                                            <div class="-align-center">
                                                {!!Form::select('member',array_pluck($data['member'], 'lastname', 'id'),null, ['class' => 'form-control'])!!}
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary col-md-4">
                                            {{ __('Enregister') }}
                                        </button>
                                    </div>
                                </form>
                                </li>
                            </ul>
                        @endif
                        @if(array_key_exists('commentaires', $data) and $data['demande']->validated == false and $data['demande']->statut_id != 6)
                            <form method="POST" action="{{ url('/addCommentaireDemande/'.$data['demande']->id.'/more') }}"
                                  aria-label="{{ __('Ajouter un commentaire') }}">
                                @csrf
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item">
                                        <label for="commentaire" class="col-form-label text-md-right">Ajouter un commentaire : </label>
                                        <textarea id="commentaire" class="form-control" name="commentaire" rows="6" required=""></textarea>
                                    </li>
                                </ul>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item">
                                        <a href='{{url('validerDemande/'. $data['demande']->id .'/OK')}}'
                                           class="btn btn-primary btn-outline-success">Valider la demande</a>
                                        <a href='{{url('validerDemande/'. $data['demande']->id.'/KO')}}'
                                           class="btn btn-primary btn-outline-danger">Refuser la demande</a>
                                        <button type="submit" class="btn btn-primary btn-outline-info">{{ __('Demande de précision') }}</button>
                                    </li>
                                </ul>
                            </form>
                        @endif
                            @if(array_key_exists('commentaires', $data) and $data['demande']->validated == true and $data['demande']->processor_id != NULL)
                                <form method="POST" action="{{ url('/addCommentaireDemande/'.$data['demande']->id.'/more') }}"
                                      aria-label="{{ __('Ajouter un commentaire') }}">
                                    @csrf
                                    <ul class="list-group list-group-flush text-center">
                                        <li class="list-group-item">
                                            <label for="commentaire" class="col-form-label text-md-right">Ajouter un commentaire : </label>
                                            <textarea id="commentaire" class="form-control" name="commentaire" rows="6" required=""></textarea>
                                        </li>
                                    </ul>
                                    <ul class="list-group list-group-flush text-center">
                                        <li class="list-group-item">
                                            <button type="submit" class="btn btn-primary btn-outline-info">{{ __('Demande de précision') }}</button>
                                        </li>
                                    </ul>
                                </form>
                            @endif
                        @if($data['demande']->validated == true)
                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item">
                                    <a href='{{ url('/addMemberDemande/'. $data['demande']->id .'/me') }}'
                                           class="btn btn-primary">Prendre en charge la demande</a>
                                </li>
                            </ul>
                        @endif
                        @if( (Request::session()->get('manager') == true or Auth::user()->role->name == 'Administrateur') and $data['demande']->validated == false and  $data['demande']->closed == false and !array_key_exists('commentaires', $data) and $data['demande']->statut_id == 1)
                        <ul class="list-group list-group-flush text-center">
                            <li class="list-group-item">
                            <a href='{{url('validerDemande/'. $data['demande']->id .'/OK')}}'
                               class="btn btn-primary btn-outline-success">Valider la demande</a>
                            <a href='{{url('validerDemande/'. $data['demande']->id.'/KO')}}'
                               class="btn btn-primary btn-outline-danger">Refuser la demande</a>
                            <a href='{{url('validerDemande/'. $data['demande']->id.'/PLUS')}}' class="btn btn-primary btn-outline-info">Demande de précision</a>
                            </li>
                        </ul>
                        @endif
                    @endif
                    @if($data['demande']->statut_id == 6 and Auth::user()->id == $data['demande']->user->id)
                            <form method="POST" action="{{ url('/addCommentaireDemande/'.$data['demande']->id.'/one') }}"
                                  aria-label="{{ __('Ajouter un commentaire') }}">
                                @csrf
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item">
                                        <label for="commentaire" class="col-form-label text-md-right">Ajouter un commentaire : </label>
                                        <textarea id="commentaire" class="form-control" name="commentaire" rows="6" required=""></textarea>
                                    </li>
                                </ul>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item">
                                        <button type="submit" class="btn btn-primary">{{ __('Enregister') }}</button>
                                    </li>
                                </ul>
                            </form>
                    @endif
                    @if(array_key_exists('commentaires', $data))
                        <div class="card-body">
                            <h5 class="card-title text-center">Commentaire : </h5>
                                @foreach($data['commentaires'] as $k=>$commentaire)
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><label for="commentaire" class="col-form-label text-md-right">Commentaire de : {{$commentaire->user->firstname .' '.$commentaire->user->lastname}}</label>
                                        <label id="commentaire" class="form-control" name="commentaire" rows="6" required="">{{$commentaire->commentaire}}</label></li>
                                    </ul>
                                @endforeach
                        </div>
                    @endif
                    @if($data['demande']->validated == true and $data['demande']->statut_id == 4)
                        <form method="POST" action="{{ url('/cloturerDemande/'. $data['demande']->id) }}"
                              aria-label="{{ __('Ajouter un commentaire') }}">
                            @csrf
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item">
                                        <label for="commentaire" class="col-form-label text-md-right">Ajouter un commentaire : </label>
                                        <textarea id="commentaire" class="form-control" name="commentaire" rows="6" required=""></textarea>
                                    </li>
                                </ul>
                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item">
                                    <button type="submit" class="btn btn-primary">{{ __('Cloturer la demande') }}</button>
                                </li>
                            </ul>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
