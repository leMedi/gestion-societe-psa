<?php

require __DIR__. '/../include/outils.php';
$user = pageProteger(); 

$commandes = $user->commandes();

?>


<?php
    template('header');
?>


<div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
    <?php template('sidebar'); ?> 
</div> <!-- / main menu-->

<nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
        
    <?php
        if($_SESSION['is_client'])
            template('nav', array(
                'actions' => array(
                    array(
                        'link'  => lien('/commande/ajouter.php'),
                        'text'  => 'ajouter',
                        'color' => 'success' 
                    )
                )
            ));
        else
            template('nav');
            
        
    ?> 
</nav>





<div class="app-content content container-fluid" >
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">La listes des commandes</h4>
                        <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                                <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>Numero Commande</th>
                                        <th>Projet</th>
                                        <th>Date Commande</th>
                                        <th>Date Livraison</th>
                                        <th>Client</th>
                                        <th>Contact</th>
                                        <th>Commentaire</th>
                                        <th>Valider/Supp</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        foreach ($commandes as $e) :
                                    ?>
                                        <tr class="<?= ($e->estProche())? 'bg-warning' : '' ?>">
                                            <td class="text-truncate"><a class="blue-grey" href="<?= lien('/commande/info.php?id=' . $e->id) ?>"><?= $e->numero ?></a></td>
                                            <td class="text-truncate"><a class="blue-grey" href="<?= lien('/commande/info.php?id=' . $e->id) ?>"><?= $e->projet ?></a></td>
                                            <td class="text-truncate"><a class="blue-grey" href="<?= lien('/commande/info.php?id=' . $e->id) ?>"><?= $e->date_commande ?></a></td>
                                            <td class="text-truncate"><a class="blue-grey" href="<?= lien('/commande/info.php?id=' . $e->id) ?>"><?= $e->date_livraison ?></a></td>
                                            <td class="text-truncate"><a class="blue-grey" href="<?= lien('/commande/info.php?id=' . $e->id) ?>"><?= $e->client ?></a></td>
                                            <td><a class="blue-grey" href="<?= lien('/commande/info.php?id=' . $e->id) ?>"><?= $e->contact ?></td>
                                            <td><a class="blue-grey" ><?= $e->commentaire ?></td>    
                                            <td>
                                                <a class="btn btn-success" href="<?= lien('/commande/approve.php?id=' . $e->id) ?>"><i class="icon-check"></i></a>
                                                <a class="btn btn-info" href="<?= lien('/commande/modifier.php?id=' . $e->id) ?>"><i class="icon-edit2"></i></a>
                                                <a class="btn btn-danger" href="<?= lien('/commande/supprimer.php?id=' . $e->id) ?>"><i class="icon-trash-o"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
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

