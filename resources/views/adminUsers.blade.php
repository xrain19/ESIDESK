@extends('layouts.template')

@section('content')

    <div class="container bootstrap snippet">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-box no-header clearfix">
                    <div class="main-box-body clearfix">
                        <div class="table-responsive">
                            <table class="table user-list">
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
                                            <strong>{{$user->lastname . " " . $user->firstname}}  </strong>
                                            <br />
                                            <span class="user-subhead"><strong>{{$user->role->name}}</strong> </span>
                                        </td>
                                        <td>{{ $user->equipe->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td style="width: 20%;">
                                            <a href={{'/editUserForm/' . $user->id}}  class="table-link">
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
@endsection
