@extends('layouts.app')

@section('content')

    <div class="main-body">

        <div class="page-wrapper">

            <div class="page-body">

                <div class="row">

                    <div class="col-xl-3 col-md-6">

                        <div class="card bg-c-yellow update-card">

                            <div class="card-block">

                                <div class="row align-items-end">

                                    <div class="col-8">
                                        <h4 class="text-white">{{ $pdf }}</h4>
                                        <h6 class="text-white m-b-0">Abonnés digital</h6>
                                    </div>

                                    <div class="col-4 text-right">
                                        <canvas id="update-chart-1" height="50"></canvas>
                                    </div>

                                </div>

                            </div>

                            <div class="card-footer">
                                <p class="text-white m-b-0"><i class="fa fa-file-pdf text-white f-14 m-r-10"></i>
                                <a href="{{ url('digital') }}" class="text-white m-b-0">voir les détails <i class="fa fa-arrow-alt-circle-right"></i></a>
                                </p>
                            </div>

                        </div>

                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-c-green update-card">
                            <div class="card-block">
                                <div class="row align-items-end">
                                    <div class="col-8">
                                        <h4 class="text-white">{{ $tabloid }}</h4>
                                        <h6 class="text-white m-b-0">Abonnés tabloïd</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <canvas id="update-chart-2" height="50"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <p class="text-white m-b-0"><i class="fa fa-file text-white f-14 m-r-10"></i>
                                <a href="{{ url('journal') }}" class="text-white m-b-0">voir les détails <i class="fa fa-arrow-alt-circle-right"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-c-pink update-card">
                            <div class="card-block">
                                <div class="row align-items-end">
                                    <div class="col-8">
                                        <h4 class="text-white">{{ $pub }}</h4>
                                        <h6 class="text-white m-b-0">Publicités</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <canvas id="update-chart-3" height="50"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('publicites.index') }}" class="text-white m-b-0">voir les détails <i class="fa fa-arrow-alt-circle-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection
