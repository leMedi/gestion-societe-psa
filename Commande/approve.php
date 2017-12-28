<?php
require __DIR__. '/../include/outils.php';
$user = pageProteger(); 

require_once( __DIR__. '/../include/mail.php');


if(!isset($_GET['id']))
header('Location:' . lien('/Commande/'));


if(isset($_GET['id']))
{

	$commande = Commande::trouver('id', $_GET['id']);
    
    if($commande != false)
	{
        $s = $commande->statuts;
        
        //Recipients
        $mail->setFrom('continantal@appweb.com', 'APP WEB');
        if($commande->statuts == 1) {
            $mail->addAddress('serviceBureaudEtude@continantal.com', 'Bureau d\'Etude');
            $mail->Subject = 'Demande des plans - Commande ' .  $commande->id;
            $mail->Body = 'veuillez preparer les plans pour la commande <a href="http://localhost'. lien('/Commande/info.php?id=' .  $commande->id). '">lien</a>';
        }elseif ($commande->statuts == 2) {
            $mail->addAddress('serviceBureaudEtude@continantal.com', 'Bureau d\'Etude');
            $mail->Subject = 'Fabrication - Commande ' .  $commande->id;
            $body = 'Les plans sont prét pour la commande <a href="http://localhost'. lien('/Commande/info.php?id=' .  $commande->id). '">lien</a>';
            $body = $body . '<br> veuillez commancer la production si la date de livraison est convenable';
            $mail->Body = $body;
        }elseif ($commande->statuts == 3) {
            $mail->addAddress('servicePrototypage@continantal.com', 'service Prototypage');
            $mail->Subject = 'Debut de Fabrication - Commande ' .  $commande->id;
            $mail->Body = 'On a commencer la production pour la commande <a href="http://localhost'. lien('/Commande/info.php?id=' .  $commande->id). '">lien</a>';
        }else {
            $mail->addAddress('service@continantal.com', 'societe continantal');
            $mail->Subject = 'Debut de traitement - Commande ' .  $commande->id;
            $mail->Body = 'lien commande : <a href="http://localhost'. lien('/Commande/info.php?id=' .  $commande->id). '">lien</a>';
        }
        $mail->send();
        
        $commande->aprove();
    }
    
    header('Location: ' . lien('/Commande/'));

}
?>