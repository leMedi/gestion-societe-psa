<?php
require_once( __DIR__. '/../include/outils.php');


$errors = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["commande"])) {
    
    $commande = new commande($_POST["commande"]);

    $result = $commande->enregistrer();

    if($result === true)
        header('Location:index.php');
}

include "ajouter.view.php";
?>

