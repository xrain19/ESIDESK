@extends('layouts.template')

@section('breadcrumb')
    <li class="breadcrumb-item active">Liste des utilisateurs</li>
@endsection

@section('content')

    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if (Session::has('alert-' . $msg))
            <div class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</div>
        @endif
    @endforeach

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
                                    <form method="GET" action="{{ url('/userSearch/' . $data['from']) }}">
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
                                                @if($user->actived == true)
                                                    <a href={{url('/editUserForm/' . $user->id)}}
                                                        class="table-link"><span class="fa-stack">
                                                        <i class="fa fa-square fa-stack-2x"></i>
                                                        <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                        </span>
                                                    </a>

                                                    <a href="{{url("/actived/" . $user->id . "/" . "deactivate" )}}"
                                                       class="table-link danger"><span class="fa-stack">
                                                       <i class="fa fa-square fa-stack-2x"></i>
                                                       <i class="fa fa-user-times fa-stack-1x fa-inverse"></i>
                                                        </span>
                                                    </a>
                                                @else
                                                    <a href="{{url("/actived/" . $user->id . "/" . "activate" )}}"
                                                       class="table-link danger" style="color: green"><span
                                                                class="fa-stack">
                                                        <i class="fa fa-square fa-stack-2x"></i>
                                                        <i class="fa fa-user-plus fa-stack-1x fa-inverse"></i>
                                                        </span>
                                                    </a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="row">{{ $data['users']->links() }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
