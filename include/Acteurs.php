<?php

require_once('outils.php');

/**
* Model employers
*/
class Employers extends basedonner
{
    protected $table = 'employers';
    protected $columns = array('nom', 'prenom', 'tel','email','address','salaire','password','admin');

    function __construct($donner = null)
    {
        Parent::__construct($this->table, $this->columns);

        if($donner){
            $this->remplire($donner);
        }

    }

    public function estAdmin()
    {
        return $this->admin == 0 ? false : true;
    }
    
}




