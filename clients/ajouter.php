<?php
require_once( __DIR__. '/../include/outils.php');


$errors = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["client"])) {
    

    if(!isset($_FILES["logo"]))
    {
        dd("no image");
    }

    $image_name = time();
    $r = upload_image($_FILES["logo"], __DIR__. '/../public/images/clients/' . $image_name);

    dd($r);
    if($r !== true)
        dd($r);
    
    $client = new Client($_POST["client"]);

    if($client->enregistrer() === true)
        header('Location:list.php');
}

include "ajouter.view.php";
?>

