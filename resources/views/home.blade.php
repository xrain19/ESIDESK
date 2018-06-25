@extends('layouts.template')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Message</div>
                    <div class="card-body">
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            @if(Session::has('alert-danger'))
                                <p class="alert alert-danger">{{ Session::get('alert-danger') }}</p>
                            @elseif(Session::has('alert-sucess'))
                                <p class="alert alert-danger">{{ Session::get('alert-success') }}</p>
                            @else
                                @guest
                                    <div class="alert alert-warning" role="alert">
                                        Veilleur vous connecter pour accéder à l'application
                                    </div>
                                @else
                                    <div class="alert alert-success" role="alert">
                                        Bienvenue dans l'application Esidesk
                                    </div>
                                @endguest
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection


