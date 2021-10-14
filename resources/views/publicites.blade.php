
<?php include 'includes/head.php';?>

<div class="theme-loader">
    <div class="ball-scale">
        <div class='contain'>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>

        </div>
    </div>
</div>

<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

        <?php include 'includes/nav.php';?>

        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">

                <?php include 'includes/aside.php';?>

                <div class="pcoded-content">
                    <div class="pcoded-inner-content">

                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- begin alert -->
                                @include('includes.alerte')
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
                                                                    <th>Position</th>
                                                                    <th>Office</th>
                                                                    <th>Age</th>
                                                                    <th>Start date</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>

                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>System Architect</td>
                                                                    <td>Edinburgh</td>
                                                                    <td>61</td>
                                                                    <td>2011/04/25</td>
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
                                                                            
                                                                            <a class="dropdown-item" href="showabonnement.php"><i class="fa fa-eye"></i>Voir</a>
                                                                            <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#myModal2"><i class="fa fa-edit"></i>Modifier</a>
                                                                            <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#myModal3"><i class="fa fa-trash"></i>Supprimer</a>
                                                                        
                                                                        </div>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>System Architect</td>
                                                                    <td>Edinburgh</td>
                                                                    <td>61</td>
                                                                    <td>2011/04/25</td>
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
                                                                            
                                                                            <a class="dropdown-item" href="#!"><i class="fa fa-eye"></i>Voir</a>
                                                                            <a class="dropdown-item" href="#!"><i class="fa fa-edit"></i>Modifier</a>
                                                                            <a class="dropdown-item" href="#!"><i class="fa fa-trash"></i>Supprimer</a>
                                                                        
                                                                        </div>
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


<!-- Modal d'ajout -->
<div class="modal fade" id="myModal1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ajouter une publicité</h4>
                <button type="button" class="close"
                    data-dismiss="modal"
                    aria-hidden="true">×</button>
            </div>
            <div class="container"></div>

            <div class="modal-body">
                
                <input type="text" name="titre" class="form-control mt-1" placeholder="Titre">
                <input type="text" name="reseau" class="form-control mt-1" placeholder="Chapeau des réseaux sociaux">

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

            </div>

            <div class="modal-footer"> 
                <a href="#" data-dismiss="modal" class="btn">Fermer</a>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal de modification -->
<div class="modal fade" id="myModal2">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Modifier une publicité</h4>
                <button type="button" class="close"
                    data-dismiss="modal"
                    aria-hidden="true">×</button>
            </div>
            <div class="container"></div>

            <div class="modal-body">
                
                <input type="text" name="titre" class="form-control mt-1" placeholder="Titre">
                <input type="text" name="reseau" class="form-control mt-1" placeholder="Chapeau des réseaux sociaux">

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

            </div>

            <div class="modal-footer"> 
                <a href="#" data-dismiss="modal" class="btn">Fermer</a>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal de suppression -->
<div class="modal fade" id="myModal3">
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

<?php include 'includes/footer.php';?>