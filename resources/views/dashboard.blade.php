@extends('layouts.template')

@section('content')
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if (Session::has('alert-' . $msg))
            <div class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</div>
        @endif
    @endforeach
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-users"></i>
                        </div>
                        <br>
                        <br>

                        <div class="mr-5">Equipes</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="{{ url('/homeEquipe') }}">
                        <span class="float-left">Voir</span>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card text-white bg-success o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-thumb-tack"></i>
                        </div>
                        <div class="text-left">
                            <div class="huge">{{Request::session()->get('countDemMine')}}</div>
                        </div>
                        <div class="mr-5">Mes demandes</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="{{ url('/listDemande/mine/created_at') }}">
                        <span class="float-left">Voir</span>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="card text-white bg-warning o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-list"></i>
                        </div>
                        <div class="text-left">
                            <div class="huge">{{Request::session()->get('countDemInProg')}}</div>
                        </div>
                        <div class="mr-5">Demande en cours de traitement</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="{{url('/listDemande/inprogress/desired_date')}}">
                        <span class="float-left">Voir</span>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>
            @if(Auth::user()->role->name == 'Administrateur' or Request::session()->get('manager') == true)
                <div class="col-xl-3 col-sm-6 mb-5">
                    <div class="card text-white bg-danger o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-ticket"></i>
                            </div>
                            <div class="text-left">
                                <div class="huge">{{Request::session()->get('countDemEquipe')}}</div>
                            </div>
                            <div class="mr-5">Demande à traiter </div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="{{url('/listDemande/equipe/created_at')}}">
                            <span class="float-left">Voir</span>
                            <span class="float-right">
                    <i class="fa fa-angle-right"></i>
                  </span>
                        </a>
                    </div>
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Example Bar Chart Card-->
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-bar-chart"></i>Graphique des demandes</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-8 my-auto"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                <canvas id="myBarChart" width="392" height="196" class="chartjs-render-monitor" style="display: block; width: 392px; height: 196px;"></canvas>
                            </div>
                            <div class="col-sm-4 text-center my-auto">
                                <div class="h4 mb-0 text-primary">{{Request::session()->get('countDemEquipe')}}</div>
                                <div class="small text-muted">Nombre de demande à traiter</div>
                                <hr>
                                <div class="h4 mb-0 text-black-50">{{Request::session()->get('countDemRefus')}}</div>
                                <div class="small text-muted">Nombre de demande rejetée</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>

        // Chart.js scripts
        // -- Set new default font family and font color to mimic Bootstrap's default styling
        Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = '#292b2c';
        // -- Bar Chart Example
        var ctx = document.getElementById("myBarChart");
        var myLineChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Mes demandes", "Demande en cours", "Demande à traiter","Demande refusée"],
                datasets: [{
                    label: "Stat demande",
                    backgroundColor: ['#28a745','#ffc107','#dc3545','#6c757d'],
                    borderColor: ['#28a745','#ffc107','#dc3545','#6c757d'],
                    data: [{{Request::session()->get('countDemMine')}}, {{Request::session()->get('countDemInProg')}}, {{Request::session()->get('countDemEquipe')}},{{Request::session()->get('countDemRefus')}}],
                }],
            },
            options: {
                scales: {
                    xAxes: [{
                        ticks: {
                            min: 0,
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            min: 0,
                        },
                        gridLines: {
                            display: true
                        }
                    }],
                },
                legend: {
                    display: false
                }
            }
        });
    </script>
    @endsection