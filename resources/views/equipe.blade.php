@extends('layouts.template')

@section('breadcrumb')
    <li class="breadcrumb-item active">Liste des équipes</li>
@endsection
@section('content')
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if (Session::has('alert-' . $msg))
            <div class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</div>
        @endif
    @endforeach
    <div class="container">
        <div class="card">
            <div class="card-header">Equipes</div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <a href="{{ url('/registerFormEquipe') }}" class="btn btn-primary btn-lg" role="button"
                   aria-disabled="true">Créer une équipe</a>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Liste d'équipe
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div id="dataTable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div id="dataTable_filter" class="dataTables_filter">
                                    <form method="POST" action="{{ url('/equipeSearch') }}">
                                        @csrf
                                        <label>Recherche:
                                            <input type="search" id="search" name="search"
                                                   class="form-control form-control-sm" placeholder=""
                                                   aria-controls="dataTable">
                                        </label>
                                    </form>
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
                                            aria-sort="ascending" style="width: 137px;">Equipe
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Manager: activate to sort column ascending"
                                            style="width: 213px;">Manager
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1"
                                            aria-label="Membre de l'équipe: activate to sort column ascending"
                                            style="width: 96px;">Membre de l'équipe
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1"
                                            aria-label="Membre de l'équipe: activate to sort column ascending"
                                            style="width: 96px;">
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr role="row" class="odd">
                                        @foreach($equipes as $equipe)
                                            <td class="sorting_1">{{ $equipe->name }}</td>
                                            @if($equipe->manager_id != null)
                                                {!! $manager = false !!}
                                                <td>@foreach($equipe->user as $member)
                                                        @if($member->id == $equipe->manager_id)
                                                            {!! $member->lastname !!}
                                                            <input type="hidden" {!! $manager = true !!}>
                                                        @endif
                                                    @endforeach
                                                    @if($manager != true)
                                                        Aucun Manager
                                                    @endif
                                                </td>
                                            @else
                                                <td>Aucun Manager</td>
                                            @endif
                                            <td>@foreach($equipe->user as $member)
                                                    @if($loop->last)
                                                        {!! $member->lastname !!}
                                                    @else
                                                        {!! $member->lastname.' , ' !!}
                                                    @endif
                                                @endforeach
                                                @if($equipe->user->count() == 0)
                                                    Aucun membre
                                                @endif
                                            </td>
                                            <td style="width: 20%;">
                                                <a href="{{url('/listCat/' . $equipe->id)}}" class="btn btn-primary">Catégories</a>
                                                @if(Auth::user()->role->name == 'Administrateur' or Auth::user()->id == $equipe->manager_id)
                                                    <a href={{url('/editEquipeForm/' . $equipe->id)}}  class="table-link">
                                                <span class="fa-stack">
                                                    <i class="fa fa-square fa-stack-2x"></i>
                                                    <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                </span>
                                                    </a>
                                                    <a class="table-link danger"
                                                       onclick="return confirm('Voulez-vous supprimer cette équipe ?')"
                                                       href={{url('/deleteEquipe/' . $equipe->id)}}>
                                                <span class="fa-stack">
                                                    <i class="fa fa-square fa-stack-2x"></i>
                                                    <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                                </span>
                                                    </a>
                                                @endif
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