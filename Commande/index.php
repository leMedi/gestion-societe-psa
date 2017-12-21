<?php

require __DIR__. '/../include/outils.php';
$user = pageProteger(); 


$commande = new commande();
$commande = $commande->tous();


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

<style>
.table th,.table td{padding: 0;}
</style>


<div class="content">
    <div class="container">
        <h2>La listes des commandes</h2>
        <p>Voila le tableau des commandes ... </p>            
        <table class="table table-striped">
            <thead>
            <th><h6>Numero Commande</h6></th>
            <th><h6>Projet</h6></th>
            <th><h6>Date Commande</h6></th>
            <th><h6>Date Livraison</h6></th>
            <th><h6>Client</h6></th>
            <th><h6>Chef Projet</h6></th>
            <th><h6>valide</h6></th>
            <th><h6>Contact</h6></th>
            <th><h6>Commantaire</h6></th>
            <th><h6>Action</h6></th>
            </thead>
            <tbody>
            <?php 
            
            foreach($commande as $e): ?>
                <tr>
                <td><a href="<?= lien('/commande/info.php?id=' . $e->id) ?>"><?= $e->numero?></td>
                <td><a href="<?= lien('/commande/info.php?id=' . $e->id) ?>"><?= $e->projet?></td>
                <td><a href="<?= lien('/commande/info.php?id=' . $e->id) ?>"><?= $e->date_commande?></td>
                <td><a href="<?= lien('/commande/info.php?id=' . $e->id) ?>"><?= $e->date_livraison?></td>
                <td><a href="<?= lien('/commande/info.php?id=' . $e->id) ?>"><?= $e->client?></td>
                <td><a href="<?= lien('/commande/info.php?id=' . $e->id) ?>"><?= $e->chef_projet?></td>
                <td><a class="btn " href="<?= lien('/commande/info.php?id=' . $e->id) ?>">
                        <?php if($e->valide == 1){?>
                            <i class="icon-thumbs-up"></i>
                        <?php }else{ ?>
                            <i class="icon-thumbs-down"></i>
                        <?php } ?>
                </a></td>
                <td><a href="<?= lien('/commande/info.php?id=' . $e->id) ?>"><?= $e->contact?></td>
                <td><a href="<?= lien('/commande/info.php?id=' . $e->id) ?>"><?= $e->commantaire?></td>
                <td><a class="btn btn-success" href="<?= lien('/commande/modifier.php?id=' . $e->id) ?>"><i class="icon-cog"></i></a>
                <a class="btn btn-danger" href="<?= lien('/commande/supprimer.php?id=' . $e->id) ?>"><i class="icon-trash icon-white"></i></a></td>
                </tr>
            <?php endforeach; ?>   
            </tbody>
        </table>
    </div>
</div> <!-- .content -->
<?php
    template('footer');
?>

