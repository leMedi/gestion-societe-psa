<?php
require_once(__DIR__. '/../include/outils.php');

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
                    <h4 class="card-title">Ajouter un Clients</h4>
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                            <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                            <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                            <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body collapse in">
                    <div class="card-block">

                        <div class="card-text">
                            <p class="card-text">Remplire le formulaire pour le nouveau clients</p>
                        </div>

                        <form class="form" method="POST" enctype="multipart/form-data">
                            <div class="form-body">
                                <h4 class="form-section"><i class="icon-eye6"></i> A propos du Clients</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nom" class="sr-only">Nom</label>
                                            <input name="client[nom]" type="text" class="form-control" placeholder="Nom">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="prenom" class="sr-only">Prenom</label>
                                            <input name="client[prenom]" type="text" class="form-control" placeholder="Prenom">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email" class="sr-only">Email</label>
                                            <input name="client[email]" type="email" class="form-control" placeholder="Email" >
                                        </div>
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label for="userinput5" class="sr-only">Telephone</label>
                                        <input name="client[tel]" class="form-control" type="number" placeholder="Tel" id="userinput5">
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="password" class="sr-only">Mot de passe</label>
                                            <input name="client[password]" type="password" id="password" class="form-control" placeholder="Mot de passe">
                                        </div>
                                    </div>
                                </div>

                                <h4 class="form-section"><i class="icon-paper"></i>Plus d'info</h4>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="userinput6" class="sr-only">Societe</label>
                                            <input name="client[societe]" class="form-control" type="text" placeholder="Societe">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email" class="sr-only">Address</label>
                                            <input name="client[address]" type="text" class="form-control" placeholder="Address" >
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <fieldset class="form-group">
                                            <label class="custom-file company-logo-label">
                                                <input name="logo" type="file" id="file" class="custom-file-input">
                                                <span class="custom-file-control"></span>
                                            </label>
                                            <!-- <input name="client[address]" type="text" class="form-control" placeholder="Address" > -->
                                        </fieldset>
                                    </div>  
                                </div> <!-- .row -->
                            </div>
                            
                            <div class="form-actions right">
                                <button type="button" class="btn btn-outline-warning mr-1">
                                    <i class="icon-cross2"></i> Anuuler
                                </button>
                                <button type="submit" class="btn btn-outline-primary">
                                    <i class="icon-check2"></i> Ajouter
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div> <!-- .content -->
<?php
    template('footer');
?>