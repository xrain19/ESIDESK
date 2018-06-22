@extends('layouts.template')

@section('content')
    <div class="container">
                <div class="card">
                    <div class="card-header">Equipes</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <a href="{{ url('/registerFormEquipe') }}" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Créer une équipe</a>
                    </div>
                </div>
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Liste d'équipe</div>
            <div class="card-body">
                <div class="table-responsive">
                    <div id="dataTable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div id="dataTable_filter" class="dataTables_filter">
                                    <label>Search:
                                        <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Equipe: activate to sort column descending" aria-sort="ascending" style="width: 137px;">Equipe</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Manager: activate to sort column ascending" style="width: 213px;">Manager</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Membre de l'équipe: activate to sort column ascending" style="width: 96px;">Membre de l'équipe</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr role="row" class="odd">
                                    @foreach($equipes['name'] as $k => $equipe)
                                            <td class="sorting_1">{{ $equipe }}</td>
                                            <td >{{ $equipes['manager'][$k] }}</td>
                                            <td >{{ $equipes['member'][$k] }}</td>
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