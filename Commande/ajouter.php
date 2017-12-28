<?php
require_once( __DIR__. '/../include/outils.php');
require_once( __DIR__. '/../include/mail.php');
$user = Client::trouver("id", $_SESSION["user_id"]);

$errors = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["commande"])) {
    
    $commande = new commande($_POST["commande"]);
    $commande->client_id = $user->id;
    $commande->date_commande = date("d/m/Y");
    $commande->statuts = 1;

    $result = $commande->enregistrer();

    

    if($result === true){

        //Recipients
        $mail->setFrom('continantal@appweb.com', 'APP WEB');
        $mail->addAddress('serviceComercial@continantal.com', 'Service Comercial');
        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Une nouvel commande de client ' . $user->societe;
        $mail->Body    = 'Le client a rempli une nouvelle comande <a href="'. lien('/Commande/info.php?id=' .  $commande->id). '">lien</a>';

        $mail->send();
        header('Location:index.php');
    }
}

include "ajouter.view.php";
?>

