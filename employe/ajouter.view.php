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
                    <h4 class="card-title">Ajouter un Employer</h4>
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
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>

                        <form class="form" method="POST">
                            <div class="form-body">
                                <h4 class="form-section"><i class="icon-eye6"></i> A propos d'Employer</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nom" class="sr-only">Nom</label>
                                            <input type="text" id="nom" class="form-control" placeholder="Nom" name="employe[nom]">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="prenom" class="sr-only">Prenom</label>
                                            <input type="text" id="prenom" class="form-control" placeholder="Prenom" name="employe[prenom]">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email" class="sr-only">Email</label>
                                            <input type="email" id="email" class="form-control" placeholder="Email" name="employe[email]">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password" class="sr-only">Mot de passe</label>
                                            <input type="password" id="password" class="form-control" placeholder="Mot de passe" name="employe[password]">
                                        </div>
                                    </div>
                                </div>

                                <h4 class="form-section"><i class="icon-paper"></i>Plus d'info</h4>

                                <div class="form-group">
                                    <label for="userinput18" class="sr-only">adresse</label>
                                    <input class="form-control" type="text" placeholder="adresse" id="userinput18" name="employe[address]">
                                </div>

                                <div class="form-group">
                                    <label for="userinput5" class="sr-only">tel</label>
                                    <input class="form-control" type="text" placeholder="tel" id="userinput5" name="employe[tel]">
                                </div>

                                <div class="form-group">
                                    <label for="userinput6" class="sr-only">departement</label>
                                    <input class="form-control" type="text" placeholder="departement" id="userinput6" name="employe[departement]">
                                </div>

                                <div class="form-group">
                                <select name="employe[est_chefdep]" class="form-control">
                                <option value="1">Chef de Projet</option>
                                <option value="0">N'est pas Chef de Projet</option>
                            </select>
                                </div>

                            </div>

                            <div class="form-actions right">
                                <button type="button" class="btn btn-outline-warning mr-1">
                                    <i class="icon-cross2"></i> Annuler
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