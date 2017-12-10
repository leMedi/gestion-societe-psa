<?php
require_once( __DIR__. '/../include/outils.php');


$errors = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["client"])) {
    
    $client = new Client($_POST["client"]);

    if($client->enregistrer() === true)
        header('Location:list.php');
}

include "ajouter.view.php";
?>

