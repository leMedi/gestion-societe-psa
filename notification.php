<?php 
require __DIR__. '/include/outils.php';

$user = pageProteger();


$notifications = $user->notifications();
foreach ($notifications as $notification) {
	var_dump($notification);
	$notification->est_vue = true;
	$notification->enregistrer();
}