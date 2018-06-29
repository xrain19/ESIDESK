@extends('layouts.template')

@section('content')

    @if(Session::has('alert-danger'))
        <p class="alert alert-danger">{{ Session::get('alert-danger') }}</p>
    @elseif(Session::has('alert-success'))
        <p class="alert alert-danger">{{ Session::get('alert-success') }}</p>
    @endif

    <div class="container bootstrap snippet">
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
                            @elseif(Auth::user()->equipe_id != $category->equipe->id)
                                <a href='{!!url('/createDemandeForm/' .  $category->id) !!}' class="btn btn-primary">Faire
                                    une demande</a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
