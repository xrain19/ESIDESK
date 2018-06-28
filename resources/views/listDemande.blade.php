@extends('layouts.template')

@section('content')
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if (Session::has('alert-' . $msg))
            <div class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</div>
        @endif
    @endforeach
    <div class="container">
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> {!! $data['title'] !!}
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div id="dataTable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div id="dataTable_filter" class="dataTables_filter">
                                    <label>Recherche:
                                        <input type="search" class="form-control form-control-sm" placeholder=""
                                               aria-controls="dataTable">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered dataTable" id="dataTable" width="100%"
                                       cellspacing="0" role="grid" aria-describedby="dataTable_info"
                                       style="width: 100%;">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Equipe: activate to sort column descending"
                                            aria-sort="ascending" style="width: 137px;">Demande
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Manager: activate to sort column ascending"
                                            style="width: 213px;">Statut
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1"
                                            aria-label="Membre de l'équipe: activate to sort column ascending"
                                            style="width: 96px;">urgence
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1"
                                            aria-label="Date de création"
                                            style="width: 96px;">Date de création
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1"
                                            aria-label="Date souhaitée"
                                            style="width: 96px;">Date souhaitée
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr role="row" class="odd">
                                        @foreach($data['demandes'] as $demande)
                                            <td>
                                                <strong> <a href={{url('/detailsDemande/' . $demande->id)}}>{{$demande->title}}</a>  </strong>
                                                <br/>
                                                <span class="user-subhead" style="font-size: medium"><i>Demandeur: {{$demande->user->firstname . " " .$demande->user->lastname}}</i> </span>
                                            </td>
                                            <td>
                                                {{$demande->statut->name}}
                                            </td>
                                            <td>
                                                @switch($demande->urgency)
                                                    @case(1)
                                                    Forte
                                                    @break
                                                    @case(2)
                                                    Moyenne
                                                    @break
                                                    @case(3)
                                                    Faible
                                                    @break

                                                @endswitch
                                            </td>
                                            <td>
                                                {{date('d-m-Y à H', strtotime($demande->created_at))}}h
                                            </td>
                                            <td>
                                                {{date('d-m-Y', strtotime($demande->desired_date))}}
                                            </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection