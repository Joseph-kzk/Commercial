@extends('layouts.app')

@section('content')

    <div class="main-body">
        <div class="page-wrapper">

            <div class="page-body">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="cover-profile">
                            <div class="profile-bg-img">
                                <img class="profile-bg-img img-fluid"
                                    src="{{ asset('assets/images/user-profile/bg-img1.jpg') }}"
                                    alt="bg-img">
                                <div class="card-block user-info">
                                    <div class="col-md-12">
                                        <div class="media-left">
                                            <a href="#" class="profile-image">
                                                <img class="user-img img-radius"
                                                    src="{{ asset('assets/images/usere.png') }}"
                                                    alt="user-img">
                                            </a>
                                        </div>
                                        <div class="media-body row">
                                            <div class="col-lg-12">
                                                <div class="user-title">
                                                    <h2>{{$abonnements->personne}}</h2>
                                                    <span class="text-white">{{$abonnements->entreprise}}</span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">

                        <div class="tab-header card">
                            <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist"
                                id="mytab">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab"
                                        href="#personal" role="tab">Informations</a>
                                    <div class="slide"></div>
                                </li>
                            </ul>
                        </div>


                        <div class="tab-content">

                            <div class="tab-pane active" id="personal" role="tabpanel">

                                <div class="card">
                                    <div class="card-header">
                                        <a href="{{ route('abonnements.index') }}" type="button"
                                            class="btn btn-sm btn-primary f-right">
                                            <i class="fa fa-backward">  Retour</i>
                                        </a>
                                    </div>
                                    <div class="card-block">
                                        <div class="view-info">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="general-info">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-xl-6">
                                                                <div class="table-responsive">
                                                                    <table class="table m-0">
                                                                        <tbody>
                                                                            <tr>
                                                                                <th scope="row">
                                                                                    Nom
                                                                                </th>
                                                                                <td>{{$abonnements->personne}}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">Entreprise</th>
                                                                                <td>{{$abonnements->entreprise}}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">
                                                                                    Numérode téléphone
                                                                                </th>
                                                                                <td>
                                                                                    {{$abonnements->contact}}
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">Addresse mailStatus</th>
                                                                                <td>{{$abonnements->email}}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">
                                                                                    Type d'abonnement
                                                                                </th>
                                                                                <td>{{$abonnements->nature}}</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12 col-xl-6">
                                                                <div class="table-responsive">
                                                                    <table class="table">
                                                                        <tbody>
                                                                            <tr>
                                                                                <th scope="row">
                                                                                    Montant
                                                                                </th>
                                                                                <td>{{$abonnements->montant}}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">Etat</th>
                                                                                <td>{{$abonnements->etat}}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">statut</th>
                                                                                <td>{{$abonnements->statut}}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">Début l'abonnement</th>
                                                                                <td>{{$abonnements->datedebut}}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">Fin de l'abonnement</th>
                                                                                <td>
                                                                                {{$abonnements->datefin}}
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>


                                    </div>

                                </div>

                            </div>


                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection