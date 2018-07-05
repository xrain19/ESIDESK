@extends('layouts.template')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ url('/homeEquipe') }}">Liste des équipes</a>
    </li>
    <li class="breadcrumb-item active">Liste des catégories</li>
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
                <i class="fa fa-table"></i> Liste des catégories de l'équipe {{$data['equipe']->name}}
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach($data['categories'] as $category)
                        <div style="padding-left: 3rem">
                            <div class="card" style="width: 18rem;border-color: black;height: 25rem">
                                <div class="card-body">
                                    <h5 class="card-title">{!! $category->name !!}</h5>
                                    <p class="card-text text-body">{!! $category->description !!}</p>
                                </div>

                                <div class="card-footer">
                                    @if($data['equipe']->manager_id == Auth::user()->id or Auth::user()->role->name == 'Administrateur')
                                        <a href={{url('/editCatForm/' . $category->id)}}  class="table-link">
                            <span class="fa-stack">
                            <i class="fa fa-square fa-stack-2x"></i>
                            <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                            </span>
                                        </a>
                                    @elseif(Auth::user()->equipe_id != $category->equipe->id and $data['equipe']->manager_id != null)
                                        <a href='{!!url('/createDemandeForm/' .  $category->id) !!}'
                                           class="btn btn-primary">Faire
                                            une demande</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div>{{ $data['categories']->links() }}</div>
        </div>
    </div>
@endsection
