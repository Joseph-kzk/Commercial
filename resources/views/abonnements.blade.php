
@extends('layouts.app')

@section('content')

    <div class="main-body">
        <div class="page-wrapper">
            <!-- begin alert -->
            @include('layouts.alerte')
            <!-- end alert -->

            <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <div class="d-inline">
                                <h4>Pages des abonnements</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <button type="button"
                                    class="btn btn-primary waves-effect m-b-10" data-toggle="modal" data-target="#myModal1">
                                    Ajouter
                                </button>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="card">
                            <div class="card-header table-card-header">
                                <h5>Tableau des abonnements</h5>
                            </div>
                            <div class="card-block">
                                <div class="dt-responsive table-responsive">
                                    <table id="basic-btn" class="table table-striped table-bordered nowrap">
                                        
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Entreprise</th>
                                                <th>Nom</th>
                                                <th>Contact</th>
                                                <th>Email</th>
                                                <th>Début</th>
                                                <th>Fin</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        @if(count($abonnements) > 0)

                                            @foreach($abonnements as $key=> $abonnement)

                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td>{{ $abonnement->entreprise }}</td>
                                                    <td>{{ $abonnement->personne }}</td>
                                                    <td>{{ $abonnement->contact }}</td>
                                                    <td>{{ $abonnement->email }}</td>
                                                    <td>{{ $abonnement->datedebut }}</td>
                                                    <td>{{ $abonnement->datefin }}</td>
                                                    <td class="dropdown">
                                                        <button
                                                            type="button"
                                                            class="btn btn-primary btn-sm dropdown-toggle"
                                                            data-toggle="dropdown"
                                                            aria-haspopup="true"
                                                            aria-expanded="false"><i
                                                                class="fa fa-cog"
                                                                aria-hidden="true"></i>
                                                        </button>
                                                        <div
                                                            class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                            
                                                            <a class="dropdown-item" href="{{ route('abonnements.show', $abonnement->idabonnement) }}"><i class="fa fa-eye"></i>Voir</a>
                                                            <a class="dropdown-item" href="#myModal2{{$abonnement->idabonnement}}" data-toggle="modal"><i class="fa fa-edit"></i>Modifier</a>
                                                            <a class="dropdown-item" href="#myModal3{{$abonnement->idabonnement}}" data-toggle="modal"><i class="fa fa-trash"></i>Supprimer</a>
                                                        
                                                        </div>
                                                    </td>
                                                </tr>

                                                @endforeach

                                            @endif
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


    <!-- Modal d'ajout -->
        <div class="modal fade" id="myModal1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Ajouter un abonné</h4>
                        <button type="button" class="close"
                            data-dismiss="modal"
                            aria-hidden="true">×</button>
                    </div>
                    <div class="container"></div>

                    <form action="{{ route('abonnements.store') }}" method="POST">
                    @csrf

                        <div class="modal-body">
                            
                            <div class="row">
                                <div class="col-md-6 mt-1">
                                    <label class="">Entreprise</label>
                                    <input type="text" name="entreprise" class="form-control" placeholder="Nom de l'entreprise">
                                </div>

                                <div class="col-md-6 mt-1">
                                    <label class="">Personne ressource</label>
                                    <input type="text" name="personne" class="form-control" placeholder="Nom cu client">
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6 mt-1">
                                    <label class="">Contact</label>
                                    <input type="text" name="contact" class="form-control" placeholder="Numéro de tél">
                                </div>

                                <div class="col-md-6 mt-1">
                                    <label class="">Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="Addresse mail">
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6 mt-1">
                                    <label class="">Nature</label>
                                    <select name="nature" id="" class="form-control">
                                        <option value="PDF">PDF</option>
                                        <option value="Tabloïd">Tabloïd</option>
                                    </select>
                                </div>

                                <div class="col-md-6 mt-1">
                                    <label class="">Etat</label>
                                    <select name="etat" id="" class="form-control">
                                        <option value="Payé">Payé</option>
                                        <option value="Non payé">Non payé</option>
                                    </select>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6 mt-1">
                                    <label class="">Montant</label>
                                    <input type="text" name="montant" class="form-control" placeholder="Montant payé">
                                </div>

                                <div class="col-md-6 mt-1">
                                    <label class="">Statut</label>
                                    <select name="statut" id="" class="form-control">
                                        <option value="Actif">Actif</option>
                                        <option value="Inactif">Inactif</option>
                                    </select>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6 mt-1">
                                    <label class="">Date de début</label>
                                    <input type="date" name="datedebut" class="form-control">
                                </div>

                                <div class="col-md-6 mt-1">
                                    <label class="">Date de fin</label>
                                    <input type="date" name="datefin" class="form-control">
                                </div>

                            </div>

                            <div class="row">
                                
                                <div class="col-md-12 mt-1">
                                    <label class="">Observation</label>
                                    <textarea name="observation" id="" cols="20" rows="5" class="form-control"></textarea>
                                </div>

                            </div>

                        </div>

                        <div class="modal-footer"> 
                            <a href="#" data-dismiss="modal" class="btn">Fermer</a>
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>



    <!-- Modal de modification -->
    @foreach($abonnements as $abonnement)

        <div class="modal fade" id="myModal2{{$abonnement->idabonnement}}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Ajouter un abonné</h4>
                        <button type="button" class="close"
                            data-dismiss="modal"
                            aria-hidden="true">×</button>
                    </div>
                    <div class="container"></div>

                    <form action="{{ route('abonnements.update', $abonnement->idabonnement) }}" method="POST">
                        @method('put')
                        @csrf

                        <div class="modal-body">
                            
                            <div class="row">
                                <div class="col-md-6 mt-1">
                                    <label class="">Entreprise</label>
                                    <input type="text" name="entreprise" class="form-control" value="{{$abonnement->entreprise}}">
                                </div>

                                <div class="col-md-6 mt-1">
                                    <label class="">Personne ressource</label>
                                    <input type="text" name="personne" class="form-control" value="{{$abonnement->personne}}">
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6 mt-1">
                                    <label class="">Contact</label>
                                    <input type="text" name="contact" class="form-control" value="{{$abonnement->contact}}">
                                </div>

                                <div class="col-md-6 mt-1">
                                    <label class="">Email</label>
                                    <input type="text" name="email" class="form-control" value="{{$abonnement->email}}">
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6 mt-1">
                                    <label class="">Nature</label>
                                    <select name="nature" id="" class="form-control">
                                        <option value="{{$abonnement->nature}}">{{$abonnement->nature}}</option>
                                        <option value="PDF">PDF</option>
                                        <option value="Tabloïd">Tabloïd</option>
                                    </select>
                                </div>

                                <div class="col-md-6 mt-1">
                                    <label class="">Etat</label>
                                    <select name="etat" id="" class="form-control">
                                        <option value="{{$abonnement->etat}}">{{$abonnement->etat}}</option>
                                        <option value="Payé">Payé</option>
                                        <option value="Non payé">Non payé</option>
                                    </select>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6 mt-1">
                                    <label class="">Montant</label>
                                    <input type="text" name="montant" class="form-control" value="{{$abonnement->montant}}">
                                </div>

                                <div class="col-md-6 mt-1">
                                    <label class="">Statut</label>
                                    <select name="statut" id="" class="form-control">
                                        <option value="{{$abonnement->statut}}">{{$abonnement->statut}}</option>
                                        <option value="Actif">Actif</option>
                                        <option value="Inactif">Inactif</option>
                                    </select>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6 mt-1">
                                    <label class="">Date de début</label>
                                    <input type="date" name="datedebut" value="{{$abonnement->datedebut}}" class="form-control">
                                </div>

                                <div class="col-md-6 mt-1">
                                    <label class="">Date de fin</label>
                                    <input type="date" name="datefin" value="{{$abonnement->datefin}}" class="form-control">
                                </div>

                            </div>

                            <div class="row">
                                
                                <div class="col-md-12 mt-1">
                                    <label class="">Observation</label>
                                    <textarea name="observation" id="" cols="20" rows="5" value="{{$abonnement->observation}}" class="form-control">{{$abonnement->observation}}</textarea>
                                </div>

                            </div>

                        </div>

                        <div class="modal-footer"> 
                            <a href="#" data-dismiss="modal" class="btn">Fermer</a>
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    @endforeach


    <!-- Modal de suppression -->
    @foreach($abonnements as $abonnement)

        <form action="{{ route('abonnements.destroy', $abonnement->idabonnement) }}" method="POST">

            @method('delete')
            @csrf

            <div class="modal fade" id="myModal3{{$abonnement->idabonnement}}">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Supprission d'un abonné</h4>
                            <button type="button" class="close"
                                data-dismiss="modal"
                                aria-hidden="true">×</button>
                        </div>
                        <div class="container"></div>

                        <div class="modal-body">
                            <div class="alert alert-danger m-b-0" style="text-align:center;">
                                <i class="fa fa-exclamation-triangle fa-3x"style="margin-bottom:15px;"></i>
                                <h4 class="modal-title">ATTENTION !!</h4>
                                <p>
                                    Etes-vous sûr de vouloir supprimer cet abonné ?
                                </p>
                            </div>
                        </div>

                        <div class="modal-footer">               
                            <a href="#" data-dismiss="modal" class="btn">NON</a>
                            <button type="submit" class="btn btn-primary">OUI</button>
                        </div>
                    </div>
                </div>
            </div>

        </form>

    @endforeach

@endsection


