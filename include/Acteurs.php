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
                             'email', 'societe', 'password', 'avatar');

    function __construct($donner = null)
    {
        Parent::__construct(self::table, self::columns);

        if($donner){
            $this->remplire($donner);
        }

    }

}


/**
* Model employers
*/
class Employers extends basedonner
{
    const table = 'employers';
    const columns = array('nom', 'prenom', 'email','password','address','tel','departement','est_chefdep');

    function __construct($donner = null)
    {
        Parent::__construct(self::table, self::columns);
        
        if($donner){
            $this->remplire($donner);
        }

    }

    public function estAdmin()
    {
        return $this->admin == 0 ? false : true;
    }
    
}


/**
* Model Commandes
*/
class Commande extends basedonner
{
    const table = 'commandes';
    const columns = array('numero','projet','date_commande','date_livraison','client','contact','commentaire');

    function __construct($donner = null)
    {
        Parent::__construct(self::table, self::columns);

        if($donner){
            $this->remplire($donner);
        }

    }

}



