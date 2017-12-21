<?php
require __DIR__. '/../include/outils.php';
$user = pageProteger(); 


if(!isset($_GET['id']))
header('Location:' . lien('/Commande/'));


if(isset($_GET['id']))
{

	$commande = Commande::trouver('id', $_GET['id']);
    
    if($commande != false)
	{
    	$commande->aprove();
    }

    header('Location: ' . lien('/Commande/'));

}
?>