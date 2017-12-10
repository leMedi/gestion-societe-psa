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
                    <h4 class="card-title">Ajouter une commande</h4>
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                </div>
                <div class="card-body collapse in">
                    <div class="card-block">

                        <div class="card-text">
                            <p class="card-text">Remplire la commande suivante.</p>
                        </div>

                        <form class="form">
                            <div class="form-body">
                                <h4 class="form-section"><i class="icon-paper"></i>Formulaire</h4>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Numero de la Commande</label>
                                                <input type="text" class="form-control" placeholder="XXX-123">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Projet</label>
                                                <input type="text" class="form-control" placeholder="Projet_0001">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Date de Commande</label>
                                                    <input type="datetime-local" class="form-control" >
                                                </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Date de Livraison</label>
                                                    <input type="datetime-local" class="form-control" >
                                                </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Client</label>
                                                <input type="text" class="form-control" placeholder="Bahaa Eddine">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Chef de Projet</label>
                                                <input type="text" class="form-control" placeholder="Bahaa Eddine">
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="form-section"><i class="icon-paper-clip"></i>References</h4>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Personne à contacter</label>
                                                <input type="text" class="form-control" placeholder="Bahaa Eddine">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Commantaire</label>
                                                <textarea rows="5" class="form-control">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi accusantium doloribus, perspiciatis in facilis consequuntur, excepturi accusamus minima enim sequi nam atque quae possimus. Repudiandae commodi corrupti natus quo odit?
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
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
    template('footer', array(
        'path' => '../'
    ));
?>