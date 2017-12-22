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

    function commandes()
    {
        $stmt = $this->db->prepare('SELECT * FROM ' . Commande::table . ' WHERE client_id = :client_id AND statuts = 0');
        $stmt->bindParam(':client_id', $this->id);
        $stmt->execute();
        
        $resultat = $stmt->fetchAll();

        $resultat_obj = array();
        foreach ($resultat as $line) {
            $p = new Commande();
            $p->remplire_PDO($line);
            $resultat_obj[] = $p;
        }
        return $resultat_obj;
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

    function commandes()
    {
        if($this->departement == 'Contabilité')
            return Commande::tous('statuts', 1);
        
        if($this->departement == "Bureau d'Etude")
            return Commande::tous('statuts', 2);
        
        if($this->departement == 'Service Prototype')
            return Commande::tous('statuts', 3);
    }
    
}


/**
* Model Commandes
*/
class Commande extends basedonner
{
    const table = 'commandes';
    const columns = array('client_id', 'numero','projet','date_commande','date_livraison','client','contact','commentaire', 'statuts');

    function __construct($donner = null)
    {
        Parent::__construct(self::table, self::columns);

        if($donner){
            $this->remplire($donner);
        }

    }

    public function estProche()
    {
        if( strtotime($this->date_livraison) > strtotime('-5 day') )
            return true;
        return false;
    }

    public function aprove()
    {
        $this->statuts = $this->statuts + 1;
        $this->enregistrer();
    }
}



