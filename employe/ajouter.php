<?php
require_once( __DIR__. '/../include/outils.php');
$user = pageProteger(); 

$errors = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["employe"])) {

    if(!isset($_FILES["avatar"]))
    {
        dd("no image");
    }

    $avatar_name = time();
    $r = upload_image($_FILES["avatar"], __DIR__. '/../public/avatars/' . $avatar_name);

    if($r !== true)
        dd($r);
    
    $employers = new Employers($_POST["employe"]);
    $employers->avatar = $avatar_name;

    $result = $employers->enregistrer();
    // dd("done");
    if($result === true)
        header('Location:index.php');
}

include "ajouter.view.php";
?>

