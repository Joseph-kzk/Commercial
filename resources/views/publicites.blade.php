
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
                                <h4>Pages des publicités</h4>
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
                                <h5>Tableau des publicités</h5>
                            </div>
                            <div class="card-block">
                                <div class="dt-responsive table-responsive">
                                    <table id="basic-btn" class="table table-striped table-bordered nowrap">
                                        
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Entreprise</th>
                                                <th>Intitulé</th>
                                                <th>Support</th>
                                                <th>Montant</th>
                                                <th>Début</th>
                                                <th>Fin</th>
                                                <th>Etat</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        @if(count($publicites) > 0)

                                            @foreach($publicites as $key=> $publicite)

                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td>{{ $publicite->entreprise }}</td>
                                                    <td>{{ $publicite->intitule }}</td>
                                                    <td>{{ $publicite->support }}</td>
                                                    <td>{{ $publicite->montant }}</td>
                                                    <td>{{ $publicite->datedebut }}</td>
                                                    <td>{{ $publicite->datefin }}</td>
                                                    <td>{{ $publicite->paiement }}</td>
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
                                                            
                                                            <a class="dropdown-item" href="{{ route('publicites.show', $publicite->idpublicite) }}"><i class="fa fa-eye"></i>Voir</a>
                                                            <a class="dropdown-item" href="#myModal2{{$publicite->idpublicite}}" data-toggle="modal"><i class="fa fa-edit"></i>Modifier</a>
                                                            <a class="dropdown-item" href="#myModal3{{$publicite->idpublicite}}" data-toggle="modal"><i class="fa fa-trash"></i>Supprimer</a>
                                                        
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
                        <h4 class="modal-title">Nouvelle publicité</h4>
                        <button type="button" class="close"
                            data-dismiss="modal"
                            aria-hidden="true">×</button>
                    </div>
                    <div class="container"></div>

                    <form action="{{ route('publicites.store') }}" method="POST">
                    @csrf

                        <div class="modal-body">
                            
                            <div class="row">
                                <div class="col-md-6 mt-1">
                                    <label class="">Entreprise</label>
                                    <input type="text" name="entreprise" class="form-control" placeholder="Nom de l'entreprise">
                                </div>

                                <div class="col-md-6 mt-1">
                                    <label class="">Contact</label>
                                    <input type="text" name="contact" class="form-control" placeholder="Numéro de tél">
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6 mt-1">
                                    <label class="">Support</label>
                                    <select name="support" id="" class="form-control">
                                        <option value="Tabloïd">Tabloïd</option>
                                        <option value="Site web">Site web</option>
                                    </select>
                                </div>

                                <div class="col-md-6 mt-1">
                                    <label class="">Etat de suivi</label>
                                    <input type="text" name="etat" class="form-control" placeholder="Etat de suivi">
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-6 mt-1">
                                    <label class="">Montant</label>
                                    <input type="text" name="montant" class="form-control" placeholder="Montant payé">
                                </div>

                                <div class="col-md-6 mt-1">
                                    <label class="">Etat de paiement</label>
                                    <select name="paiement" id="" class="form-control">
                                        <option value="Payé">Payé</option>
                                        <option value="Non payé">Non payé</option>
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
                                    <label class="">intitulé</label>
                                    <textarea name="intitule" id="" cols="20" rows="5" class="form-control"></textarea>
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
    @foreach($publicites as $publicite)

        <div class="modal fade" id="myModal2{{$publicite->idpublicite}}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Ajouter un abonné</h4>
                        <button type="button" class="close"
                            data-dismiss="modal"
                            aria-hidden="true">×</button>
                    </div>
                    <div class="container"></div>

                    <form action="{{ route('publicites.update', $publicite->idpublicite) }}" method="POST">
                        @method('put')
                        @csrf

                        <div class="modal-body">
                            
                            <div class="row">
                                <div class="col-md-6 mt-1">
                                    <label class="">Entreprise</label>
                                    <input type="text" name="entreprise" class="form-control" value="{{$publicite->entreprise}}">
                                </div>

                                <div class="col-md-6 mt-1">
                                    <label class="">Contact</label>
                                    <input type="text" name="contact" class="form-control" value="{{$publicite->contact}}">
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6 mt-1">
                                    <label class="">Support</label>
                                    <select name="support" id="" class="form-control">
                                        <option value="{{$publicite->support}}">{{$publicite->support}}</option>
                                        <option value="Tabloïd">Tabloïd</option>
                                        <option value="Site web">Site web</option>
                                    </select>
                                </div>

                                <div class="col-md-6 mt-1">
                                    <label class="">Etat de suivi</label>
                                    <input type="text" name="etat" class="form-control" value="{{$publicite->etat}}">
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-6 mt-1">
                                    <label class="">Montant</label>
                                    <input type="text" name="montant" class="form-control" value="{{$publicite->montant}}">
                                </div>

                                <div class="col-md-6 mt-1">
                                    <label class="">Etat</label>
                                    <select name="paiement" id="" class="form-control">
                                        <option value="{{$publicite->paiement}}">{{$publicite->paiement}}</option>
                                        <option value="Payé">Payé</option>
                                        <option value="Non payé">Non payé</option>
                                    </select>
                                </div>
                            
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mt-1">
                                    <label class="">Date de début</label>
                                    <input type="date" name="datedebut" value="{{$publicite->datedebut}}" class="form-control">
                                </div>

                                <div class="col-md-6 mt-1">
                                    <label class="">Date de fin</label>
                                    <input type="date" name="datefin" value="{{$publicite->datefin}}" class="form-control">
                                </div>

                            </div>

                            <div class="row">
                                
                                <div class="col-md-12 mt-1">
                                    <label class="">intitulé</label>
                                    <textarea name="observation" id="" cols="20" rows="5" class="form-control">{{$publicite->intitule}}</textarea>
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
    @foreach($publicites as $publicite)

        <form action="{{ route('publicites.destroy', $publicite->idpublicite) }}" method="POST">

            @method('delete')
            @csrf

            <div class="modal fade" id="myModal3{{$publicite->idpublicite}}">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Supprimer une publicité</h4>
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
                                    Etes-vous sûr de vouloir supprimer cette publicité ?
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


