<?php
require_once( __DIR__. '/../include/outils.php');
$user = pageProteger(); 

$errors = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["employe"])) {

    $employers = new Employers($_POST["employe"]);

    $result = $employers->enregistrer();

    if($result === true)
        header('Location:index.php');
}

include "ajouter.view.php";
?>

