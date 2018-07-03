<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">

    <!-- Custom fonts for this template-->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">

    <title>{{ config('app.name', 'ESIDESK') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/userProfil.css') }}" rel="stylesheet">

</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<div id="app">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        @if(Auth::user() != NULL)
            <a class="navbar-brand" href="{{ url('/dashboard') }}">ESIDESK</a>
        @else
            <a class="navbar-brand" href="{{ url('/home') }}">ESIDESK</a>
         @endif
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title=""
                    data-original-title="Dashboard">
                    @if(Auth::user() != NULL)
                        <a class="nav-link" href="{{ url('/dashboard') }}">
                    @else
                        <a class="nav-link" href="{{ url('/home') }}">
                    @endif
                        <i class="fa fa-fw fa-dashboard"></i>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                </li>
                @if(Auth::user() != NULL)
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title=""
                        data-original-title="Dashboard">
                        <a class="nav-link" href="{{ url('/homeEquipe') }}">
                            <i class="fa fa-fw fa-users"></i>
                            <span class="nav-link-text">Equipes</span>
                        </a>
                    </li>
                @endif

                @guest
                @else

                    <li class="nav-item dropdown" data-toggle="tooltip" data-placement="right" title="Demande"
                        data-original-title="Demande">
                        <a class="nav-link nav-link-collapse dropdown-toggle" id="Demande"  data-toggle="dropdown"
                           href="#" data-parent="#exampleAccordion">
                            <i class="fa fa-fw fa-sitemap"></i>
                            <span class="nav-link-text">Demande</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu sidenav-second-level collapse" id="Demande">
                            <li>
                                <a href="{{ url('/listDemande/mine/created_at') }}">Mes demandes</a>
                            </li>
                            <li>
                                <a href="{{url('/listDemande/inprogress/desired_date')}}">Demande(s) en cours de traitement</a>
                            </li>
                            <li>
                                <a href="{{url('/listDemande/equipe/created_at')}}">Demande(s) à traiter</a>
                            </li>
                            <li>
                                <a href="{{url('/listDemande/refus/created_at')}}">Demande(s) rejetée(s)</a>
                            </li>
                            <li>
                                <a href="{{url('/listDemande/plus/created_at')}}">Demande(s) en attente de précision(s)</a>
                            </li>
                        </ul>
                    </li>

                    @if( Request::session()->get('manager') == true)
                        <li class="nav-item dropdown" data-toggle="tooltip" data-placement="right" title="Manager"
                            data-original-title="Manager">
                            <a class="nav-link nav-link-collapse dropdown-toggle" data-toggle="dropdown" href="#"
                               data-parent="#exampleAccordion">
                                <i class="fa fa-fw fa-sitemap"></i>
                                <span class="nav-link-text">Manager</span>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu sidenav-second-level collapse" id="Manager">
                                <li>
                                    <a href="{{ url('/catForm/' . Request::session()->get('equipe')->id) }}">Créer une
                                        catégorie dans <strong>{!! Request::session()->get('equipe')->name !!}</strong></a>
                                </li>

                                <li>
                                    <a href="{{ url('/listCat/' . Request::session()->get('equipe')->id) }}">Categories
                                        de demande <strong>{!! Request::session()->get('equipe')->name !!}</strong></a>
                                </li>
                            </ul>
                        </li>
                    @endif

                    @if(Auth::user()->role->name == 'Administrateur')
                        <li class="nav-item dropdown" data-toggle="tooltip" data-placement="right" title="Administrateur"
                            data-original-title="Administrateur">
                            <a class="nav-link nav-link-collapse dropdown-toggle" data-toggle="dropdown"
                               href="#"
                               data-parent="#exampleAccordion">
                                <i class="fa fa-fw fa-sitemap"></i>
                                <span class="nav-link-text">Administrateur</span>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu sidenav-second-level collapse" id="Administrateur">
                                <li>
                                    <a href="{{ url('/registerUserForm') }}">Ajouter un utilisateur</a>
                                </li>
                                <li>
                                    <a href="{{ route('adminUsers') }}">Liste des utilisateurs</a>
                                </li>
                            </ul>
                        </li>
                    @endif
                @endguest
            </ul>
            <ul class="navbar-nav sidenav-toggler">
                <li class="nav-item">
                    <a class="nav-link text-center" id="sidenavToggler">
                        <i class="fa fa-fw fa-angle-left"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    @if(Auth::user() != null)
                        <a class="navbar-loucas" style="color: white" >{{Auth::user()->lastname.' '.Auth::user()->firstname}}</a>
                    @endif
                </li>

                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Se connecter') }}</a>
                    </li>
                @else
                    <div class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="fa fa-fw fa-sign-out"></i> {{ __('Se déconnecter') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                @endguest
            </ul>
        </div>
    </nav>
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    @if(Auth::user() != NULL)
                        <a href="{{url('/dashboard')}}">Dashboard</a>
                    @else
                        <a href="{{url('/home')}}">Dashboard</a>
                    @endif
                </li>
               @yield('breadcrumb')
            </ol>
        </div>

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="sticky-footer">
            <div class="container">
                <div class="text-center">
                    <small>Copyright © ESIDESK 2018</small>
                </div>
            </div>
        </footer>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!-- Logout Modal-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Voulez-vous vraiment vous déconnecter ?</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Se déconnecter</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/sb-admin.js') }}" defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-collapse.js"></script>
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.min.js"></script>
@yield('script')
<script>
    $('.collapse').collapse()
</script>
</body>
</html>
