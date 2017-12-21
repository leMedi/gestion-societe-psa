<?php 
require __DIR__. '/include/outils.php';

session_start();

session_destroy();
header('Location: ' . lien('/'));

?>