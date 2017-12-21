<?php
require_once( __DIR__. '/../include/outils.php');


$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["email"]) && isset($_POST["password"])) {
    $auth = Employers::auth($_POST["email"], $_POST["password"]);
    if(!$auth)
        $errors[] = "l'email ou le mot de pass est incorrect";

    // connected sussefully
    // fill in session
    if($auth != false) {
	    $_SESSION['estConnecter']   = true;
	    $_SESSION['user_id']        = $auth;
	    $_SESSION['is_client']      = false;

	    header('Location:'. lien('/backoffice.php'));
    }

}

include "staff.view.php";
?>

