<?php
require_once('config.php');

// initialistion de base donner

$db = new PDO('mysql:host=' . db_host . ';dbname=' . db_name, db_user, db_pass);

$sql = file_get_contents('basedonner.sql');

$qr = $db->exec($sql);