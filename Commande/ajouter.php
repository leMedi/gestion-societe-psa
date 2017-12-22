<?php
require_once( __DIR__. '/../include/outils.php');
$user = Client::trouver("id", $_SESSION["user_id"]);

$errors = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["commande"])) {
    
    $commande = new commande($_POST["commande"]);
    $commande->client_id = $user->id;
    $commande->date_commande = date("d/m/Y");
    $commande->statuts = 1;

    $result = $commande->enregistrer();

    if($result === true)
        header('Location:index.php');
}

include "ajouter.view.php";
?>

