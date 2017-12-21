<?php
require __DIR__. '/../include/outils.php';



if(!isset($_GET['id']))
    header('Location:index.php');

$commande = new commande();
$commande = $commande->trouver('id', $_GET['id']);

if($commande == false)
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
                        <h4 class="card-title">commande: <?=$_GET['id']?></h4>
                        <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                    </div>
                    <div class="card-body collapse in">
                        <div class="card-block">
                            <h4 class="form-section"><i class="icon-paper"></i></h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Numero de la Commande  :&nbsp;</label>
                                            <label><?= $commande->numero ?></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Projet  :&nbsp;</label>
                                            <label ><?= $commande->projet?></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Date de Commande  :&nbsp;</label>
                                            <label ><?= $commande->date_commande?></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Date de Livraison  :&nbsp;</label>
                                            <label ><?= $commande->date_livraison?></label>
                                            </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Client  :&nbsp;</label>
                                            <label ><?= $commande->client?></label>
                                        </div>
                                    </div>
                                </div>
                            
                                                       
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Personne à contacter  :&nbsp;</label>
                                            <label ><?= $commande->contact?></label>                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Commantaire  :&nbsp;</label>
                                            <label ><?= $commande->commentaire?></label>                                            
                                        </div>
                                    </div>
                                </div>
                        </div>

                        <div class="form-actions right">
                            <a type="submit" class="btn btn-outline-primary" href="<?= lien('/commande/modifier.php?id=' . $commande->id)?>">
                                <i class="icon-cog"></i> Modifier
                            </a>
                        </div>
                        
                    </div><!-- .body -->
                </div><!-- .card -->
            </div><!-- .col-8 -->
        </div><!-- .row -->
    </div><!-- .wrapper -->
</div> <!-- .content -->

<?php
    template('footer', array(
        'path' => '../'
    ));
?>