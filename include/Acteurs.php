<?php

require_once('outils.php');


/**
 * 
 *  Utilisation
 *  
 *  /pour slection tous les lignes
 *  Model::tous();
 * 
 *  /cherche un ligne par un critere
 *  Model::trouver('id', 1);
 * 
 *  /nouveau
 *  $m = new Model();
 *  $m->col1 = 'valeur1';
 *  $m->col2 = 'valeur2';
 *  $m->enregister();
 * 
 *  /modifier
 *  $m = Model::trouver('id', 1);
 *  $m->col1 = 'nouveau valeur1';
 *  $m->col2 = 'nouveau valeur2';
 *  $m->enregister();
 * 
 *  /supprimer
 *  $m = Model::trouver('id', 1);
 *  $m->supprimer();
 * 
 */

/**
* Model Clients
*/
class Client extends basedonner
{
    const table = 'clients';
    const columns = array('nom', 'prenom', 'tel', 'address',
                             'email', 'societe', 'password');

    function __construct($donner = null)
    {
        Parent::__construct(self::table, self::columns);

        if($donner){
            $this->remplire($donner);
        }

    }

}


