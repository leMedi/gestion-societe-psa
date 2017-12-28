<?php
    require 'outils.php';


    // $c = new Client();

    // $c->email = "younes@saki.com";
    // $c->nom = "Saki";
    // $c->prenom = "younes";
    // $c->tel = "51448";
    // $c->address = "ghbnjk,";
    // $c->societe = 'ensa';
    // $c->password = "ayaw hadi";
    // $c->avatar = "hello";

    // $c->enregistrer();
    // dd($c);

    $c = Client::trouver('id', 3);

    $c->email = "kelb@hemar.com";

    $c->enregistrer();

    dd($c);

    

?>