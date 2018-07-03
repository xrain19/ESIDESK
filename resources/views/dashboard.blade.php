@extends('layouts.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-users"></i>
                        </div>
                        <div class="mr-5">Equipes</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="{{ url('/homeEquipe') }}">
                        <span class="float-left">Voir</span>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-success o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-thumb-tack"></i>
                        </div>
                        <div class="mr-5">Mes demandes</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="{{ url('/listDemande/mine/created_at') }}">
                        <span class="float-left">Voir : {{Request::session()->get('countDemMine')}} demande(s)</span>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-warning o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-list"></i>
                        </div>
                        <div class="mr-5">Demande en cours de traitement</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="{{url('/listDemande/inprogress/desired_date')}}">
                        <span class="float-left">Voir  : {{Request::session()->get('countDemInProg')}} demande(s)</span>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>
            @if( Request::session()->get('manager') == true)
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-danger o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-ticket"></i>
                            </div>
                            <div class="mr-5">Demande à traiter </div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="{{url('/listDemande/equipe/created_at')}}">
                            <span class="float-left">Voir : {{Request::session()->get('countDemEquipe')}} demande(s)</span>
                            <span class="float-right">
                    <i class="fa fa-angle-right"></i>
                  </span>
                        </a>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
