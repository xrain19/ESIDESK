@extends('layouts.template')

@section('breadcrumb')
    <li class="breadcrumb-item active">Liste des utilisateurs</li>
@endsection

@section('content')

    @if(Session::has('alert-danger'))
        <p class="alert alert-danger">{{ Session::get('alert-danger') }}</p>
    @elseif(Session::has('alert-success'))
        <p class="alert alert-success">{{ Session::get('alert-success') }}</p>
    @endif
    <div class="container">
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Liste des utilisateurs
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div id="dataTable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div id="dataTable_filter" class="dataTables_filter">
                                    <form method="POST" action="{{ url('/userSearch') }}">
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
                                    <tr>
                                        <th><span>utilisateur</span></th>
                                        <th><span>Equipe</span></th>
                                        <th><span>Email</span></th>
                                        <th>&nbsp;</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($data['users'] as $user)
                                        <tr>
                                            <td>
                                                <b>
                                                    <strong>{{$user->lastname . " " . $user->firstname}}  </strong>
                                                    <br/>
                                                    <span class="user-subhead"><i>Role : {{$user->role->name}}</i> </span>
                                                    <br/>
                                                    @if($user->equipe_id != null)
                                                        @if($user->equipe->manager_id == $user->id)
                                                            <span
                                                                    class="user-subhead"><i>Manager de l'équipe : {{$user->equipe->name}}</i> </span>
                                                        @endif
                                                    @endif
                                                </b>
                                            </td>
                                            @if($user->equipe_id != null)
                                                <td>{{ $user->equipe->name }}</td>
                                            @else
                                                <td>L'utilisateur n'est dans aucune équipe</td>
                                            @endif
                                            <td>{{ $user->email }}</td>
                                            <td style="width: 20%;">
                                                <a href={{url('/editUserForm/' . $user->id)}}  class="table-link">
                                            <span class="fa-stack">
                                                <i class="fa fa-square fa-stack-2x"></i>
                                                <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                            </span>
                                                </a>
                                                <a href="#" class="table-link danger">
                                            <span class="fa-stack">
                                                <i class="fa fa-square fa-stack-2x"></i>
                                                <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                            </span>
                                                </a>
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
