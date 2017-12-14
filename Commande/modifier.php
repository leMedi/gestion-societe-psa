<?php
require_once( __DIR__. '/../include/outils.php');




if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["commande"])) {
    
    $commande_modifier = $_POST["commande"];
    $commande = new commande();
    
    $commande = $commande->trouver('id', $commande_modifier['id']);

    $commande->remplire_PDO($commande_modifier);
    //dd($_POST["commande"]);
    $result = $commande->enregistrer();

    // dd($result);

    if($result === true)
        header('Location:info.php?id=' . $commande->id);
    else
        dd("error");

}else if(isset($_GET["id"])) {
    $commande = new commande();
    $commande = $commande->trouver('id', $_GET['id']);

    if($commande == false)
        header('Location:index.php');
    
    $commande = $commande->toArray();

    // dd($commande);

    include "modifier.view.php";

}else
    header('Location:index.php');
?>