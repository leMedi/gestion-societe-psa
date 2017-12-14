<?php
require_once(__DIR__. '/../include/outils.php');

function ancient($cle)
{
    global $commande;
    if($commande && array_key_exists($cle, $commande))
        return $commande[$cle];
    else
        return '';
}

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
                    <h4 class="card-title">Modifier la commande</h4>
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                </div>
                <div class="card-body collapse in">
                    <div class="card-block">

                        <div class="card-text">
                            <p class="card-text">Analyser la commande avant de la modifier </p>
                        </div>

                        <form class="form" method="POST">
                        <input name="commande[id]" value="<?= $commande['id'] ?>" type="text" HIDDEN>
                            <div class="form-body">
                                <h4 class="form-section"><i class="icon-paper"></i>Formulaire</h4>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Numero de la Commande</label>
                                                <input name="commande[numero]" required="required" type="text" class="form-control" value="<?= ancient('numero') ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Projet</label>
                                                <input name="commande[projet]" required="required" type="text" class="form-control" value="<?= ancient('projet') ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Date de Commande</label>
                                                    <input name="commande[date_commande]" required="required" type="date" class="form-control" value="<?= ancient('date_commande') ?>">
                                                </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Date de Livraison</label>
                                                    <input name="commande[date_livraison]" required="required" type="date" class="form-control" value="<?= ancient('date_livraison') ?>">
                                                </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Client</label>
                                                <input name="commande[client]" required="required" type="text" class="form-control" value="<?= ancient('client') ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Chef de Projet</label>
                                                <input name="commande[chef_projet]" type="text" class="form-control" value="<?= ancient('chef_projet') ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Livrer</label>
                                                <select name="commande[valide]" value="<?= ancient('valide') ?>">
                                                <option value="0">Pas encore</option>
                                                <option value="1">Deja livre</option>
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="form-section"><i class="icon-paper-clip"></i>References</h4>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Personne à contacter</label>
                                                <input name="commande[contact]" type="text" class="form-control" value="<?= ancient('contact') ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Commantaire</label>
                                                <textarea rows="5" name="commande[commantaire]"class="form-control"><?= ancient('id') ?>
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                            </div>

                            <div class="form-actions right">
                                <button type="submit" class="btn btn-outline-primary">
                                    <i class="icon-cog"></i> Modifier
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