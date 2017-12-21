<?php
    require 'outils.php';

    // $c = new Client();
    $c =  Client::trouver('nom', 'Saqi');

    // dd(Client::exec('DELETE FROM clients where id = 1'));
    // $r = Client::tous();
    // $r = Client::trouver('id', 1);

    $c->societe = 'ENSA';
    $c->password = 'ayaw hadi';

    $c->enregistrer();
    dd($c);

?>