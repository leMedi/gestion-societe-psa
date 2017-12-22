<?php
require_once( __DIR__. '/../include/outils.php');
$user = null;

if($_SESSION['is_client'])
    $user = Client::trouver("id", $_SESSION["user_id"]);
else
    $user = pageProteger();    



if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["commande"])) {
    
    $commande_modifier = $_POST["commande"];
    
    $commande = Commande::trouver('id', $commande_modifier['id']);

    $commande->remplire_PDO($commande_modifier);
    //dd($_POST["commande"]);
    $result = $commande->enregistrer();

    // dd($result);

    if($result === true)
        if(!$_SESSION['is_client'])
            header('Location:info.php?id=' . $commande->id);
        else
            header('Location:' . lien('/clients/'));
    else
        dd("error");

}else if(isset($_GET["id"])) {
    $commande = Commande::trouver('id', $_GET['id']);

    if($commande == false)
        header('Location:index.php');
    
    $commande = $commande->toArray();

    // dd($commande);

    include "modifier.view.php";

}else
    header('Location:index.php');
?>