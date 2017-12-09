<?php
require_once( __DIR__. '/../include/outils.php');




if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["employe"])) {
    
    $employe_modifier = $_POST["employe"];
    $employe = new employers();
    
    $employe = $employe->trouver('id', $employe_modifier['id']);

    $employe->remplire_PDO($employe_modifier);
    //dd($_POST["employe"]);
    $result = $employe->enregistrer();

    // dd($result);

    if($result === true)
        header('Location:info.php?id=' . $employe->id);
    else
        dd("error");

}else if(isset($_GET["id"])) {
    $employe = new employers();
    $employe = $employe->trouver('id', $_GET['id']);

    if($employe == false)
        header('Location:index.php');
    
    $employe = $employe->toArray();

    // dd($employe);

    include "modifier.view.php";

}else
    header('Location:index.php');
?>