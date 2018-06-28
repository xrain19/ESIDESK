@extends('layouts.template')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>{{ __("Demande : " . $data['demande']->title . ", Id :" . $data['demande']->id) }}</h4>
                    </div>
                    <div class="card-body">
                        <h5>Description : </h5>
                        <p id="description" class="card-text text-body">{!! $data['demande']->description !!}</p>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            Demandeur : {{$data['demande']->user->firstname . " " . $data['demande']->user->lastname}}
                        </div>
                        <div class="row">
                            Date de Création : {{date('d-m-Y à H', strtotime($data['demande']->created_at))}}h
                        </div>
                        <div class="row">
                            Date souhaitée : {{date('d-m-Y', strtotime($data['demande']->desired_date))}}
                        </div>
                        @if($data['demande']->processor_id == null and $data['demande']->equipe_id == Auth::user()->equipe_id)
                            <div class="row">
                                <a href='#' class="btn btn-primary">Prendre en charge la demande</a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
