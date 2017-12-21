<?php
require __DIR__. '/../include/outils.php';



if(!isset($_GET['id']))
    header('Location:index.php');


if(isset($_POST['confirmer']) && isset($_POST['id']))
{
	$commande = new commande();
	$commande = $commande->trouver('id', $_POST['id']);
	if($commande != false)
	{
    	$commande->supprimer();
    	header('Location:index.php');
    }

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
        <div class="col-md-3"></div>
        <div class="col-md-6" >
            <div class="card" style="padding: 35px;" >
                
                <div class="card-header" style="text-align: center;">
                    <h4 class="card-title">Comfirmer la Suppression</h4>
                     
                        <h5>Voulez-vous vraiment supprimer cette Commande?</h5>
                    </div>
                    <div class="content" style="margin-top: 20px;">
                        <form class="form-inline" method="POST" >
                            <input type="text" name="id" value="<?= $_GET['id'] ?>" hidden>
                            <div class="form-group" >
                                <button type="submit" class="btn btn-success " value="1" name="confirmer">comfirmer</button>
                                <a class="btn btn-danger " href="<?= lien('/commande/') ?>" role="button">Annuler</a>
                            </div> <!-- .form-group -->
                            
                        </form>
                                    
                    </div>
                </div>
            </div> <!-- .col -->
        </div> <!-- .row -->
    </div>
</div> <!-- .content -->


<?php
    template('footer', array(
        'path' => '../'
    ));
?>