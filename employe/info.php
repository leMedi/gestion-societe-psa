<?php
require __DIR__. '/../include/outils.php';



if(!isset($_GET['id']))
    header('Location:index.php');


$employe = Employers::trouver('id', $_GET['id']);

if($employe == false)
    header('Location:index.php');
?>


<?php
    template('header');
?>


<div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
    <?php template('sidebar'); ?> 
</div> <!-- / main menu-->

<nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
    <?php template('nav'); ?> 
</nav>
    
<div class="app-content content container-fluid">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title blue-grey">Profile de <?= $employe->nom ?></h4>
                        <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                                <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="text-xs-right teal text-bold-900 font-medium-3">Nom :</p>
                                </div>
                                <div class="col-md-6 text-bold-700 font-medium-3">
                                    <p><?= $employe->nom ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="text-xs-right teal text-bold-900 font-medium-3">Prenom :</p>
                                </div>
                                <div class="col-md-6 text-bold-700 font-medium-3">
                                    <p><?= $employe->prenom ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="text-xs-right teal text-bold-900 font-medium-3">Tel :</p>
                                </div>
                                <div class="col-md-6 text-bold-700 font-medium-3">
                                    <p><?= $employe->tel ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="text-xs-right teal text-bold-900 font-medium-3">Email :</p>
                                </div>
                                <div class="col-md-6 text-bold-700 font-medium-3">
                                    <p><?= $employe->email ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="text-xs-right teal text-bold-900 font-medium-3">Addresse :</p>
                                </div>
                                <div class="col-md-6 text-bold-700 font-medium-3">
                                    <p><?= $employe->address ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="text-xs-right teal text-bold-900 font-medium-3">Email :</p>
                                </div>
                                <div class="col-md-6 text-bold-700 font-medium-3">
                                    <p><?= $employe->email ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="text-xs-right teal text-bold-900 font-medium-3">Departement :</p>
                                </div>
                                <div class="col-md-6 text-bold-700 font-medium-3">
                                    <p><?= $employe->departement ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="text-xs-right teal text-bold-900 font-medium-3">Est Chef de Projet? :</p>
                                </div>
                                <div class="col-md-6 text-bold-700 font-medium-3">
                                    <p><?= $employe->est_chefdep ? "Oui" : "Non" ?></p>
                                </div>
                            </div>
                        </div>   
                    </div>
            </div>
            </div>  
        </div>
    </div> <!-- .content -->
</div>
<?php
    template('footer');
  
?>