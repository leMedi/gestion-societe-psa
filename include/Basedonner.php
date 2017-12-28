<?php

/**
* Class de manipulation de base de donner
*/

/**
 * 
 *  // declaration du Model
 *  class Model extends basedonner
 *  {
 *     const table = 'model';
 *     const columns = array('col1', 'col2');
 *
 *     function __construct($donner = null)
 *     {
 *         Parent::__construct(self::table, self::columns);
 * 
 *         if($donner){
 *             $this->remplire($donner);
 *         }
 * 
 *     }
 * 
 *  }
 *  
 *  //// Manupulation
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


class BaseDonner
{
    
    public $db;

    // protected $table;

    protected $columns;
    protected $col_placeholders =  array();

    function __construct($table, $columns)
    {
        $this->id = -1;
        $this->table = $table;
        $this->columns = $columns;

        $prop = array();
        foreach ($this->columns as $col) {
            $prop[$col] = ''; 
        }


        extract($prop);

        foreach ($this->columns as $col) {
            $this->col_placeholders[] = ':' . $col; 
        }

        try{
            $this->db = new PDO('mysql:host=' . db_host . ';dbname=' . db_name, db_user, db_pass);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            $this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        }
        catch(PDOException $ex){
            die('impossible de se connecter a la base de donner');
        }
    }

    // transform object to array (for json responses)
    public function toArray()
    {
        return (array) $this; 
    }

    // fill in Model properties using an associative array
    public function remplire($donner)
    {
        foreach ($donner as $cle => $valeur) {
            $this->$cle = $valeur;
        }
    }

    // fill in Model properties using a PDO resulat
    public function remplire_PDO($line)
    {
        foreach ($this->columns as $col) {
            if(array_key_exists($col, $line))
                $this->$col = $line[$col];
        }
        $this->id =  $line['id'];
    }

    ////////////////////////////////
    // Static function
    ///////////
    public static function exec($sql)
    {
        try{
            $db = new PDO('mysql:host=' . db_host . ';dbname=' . db_name, db_user, db_pass);
            return $db->exec($sql);
        }
        catch(PDOException $ex){
            die('impossible de se connecter a la base de donner');
        }
    }

    public static function trouver($col, $val)
    {
        $personne = new static();
        $stmt = $personne->db->prepare("SELECT * FROM " . static::table . " WHERE $col = :val limit 1");
        $stmt->execute(array(
                        ':val' => $val,
                       ));

        if ($stmt->rowCount() == 0) 
            return false;
        else{

            $resultat = $stmt->fetchObject();

            foreach ($personne->columns as $col) {
                if(array_key_exists($col, $resultat))
                    $personne->$col = $resultat->$col;
            }

            $personne->id = $resultat->id;

            return $personne;
        }
    }

    // selectioner tous les lines dans un table
    // option de filter avec la valeur d'un column
    public static function tous($col = null, $val = null)
    {
        // connect to database
        $db;
        try{
            $db = new PDO('mysql:host=' . db_host . ';dbname=' . db_name, db_user, db_pass);
        }
        catch(PDOException $ex){
            die('impossible de se connecter a la base de donner');
        }

        if($col == null || $val == null)
            $stmt = $db->prepare("SELECT * FROM " . static::table);
        else{
            $stmt = $db->prepare("SELECT * FROM " . static::table . " WHERE $col = :val");
            $stmt->bindParam(':val', $val);
        }

        $table = "hello";
        
        $stmt->execute();
        
        $resultat = $stmt->fetchAll();

        $resultat_obj = array();
        foreach ($resultat as $line) {
            $p = new static();
            $p->remplire_PDO($line);
            $resultat_obj[] = $p;
        }
        return $resultat_obj;
    }

    

    // Chercher dans la base de donner pour un critere    
    public static function cherche($col, $val)
    {
        $stmt = $this->db->prepare("SELECT * FROM " . static::table . " WHERE $col LIKE CONCAT('%', CONCAT(:val, '%'))");
        $stmt->bindParam(':val', $val);
        $stmt->execute();
        
        $resultat = $stmt->fetchAll();
        
        $resultat_obj = array();
        foreach ($resultat as $line) {
            $p = new static();
            $p->remplire_PDO($line);
            $resultat_obj[] = $p;
        }

        return $resultat_obj;
    }

    // fonction de verification d'authentification
    // false c'est incorrect
    // id de l'utilisateur si true
    public static function auth($email, $password)
    {
        // connect to database
        $db;
        try{
            $db = new PDO('mysql:host=' . db_host . ';dbname=' . db_name, db_user, db_pass);
        }
        catch(PDOException $ex){
            die('impossible de se connecter a la base de donner');
        }
        
        $stmt = $db->prepare("SELECT id, COUNT(*) AS `total` FROM " . static::table . " WHERE email = :email and password = :password GROUP BY id");
        $stmt->execute(array(
            ':email' => $email,
            ':password' => $password
        ));
        
        $result = $stmt->fetchObject();
        if ($result != false && $result->total > 0) 
            return $result->id;
        else
            return false;
    }


    ////////////////////////////////
    // Model Methodes
    ///////////

    // enregister une modification
    // ajouter si nouveau
    // mise a jour si le record existe deja
    public function enregistrer()
    {
        $donner = array();
        foreach ($this->columns as $col) {
            $donner[$col] = $this->$col;
        }

        if($this->id > -1)
        {
            // modifier
            $donner['id'] = $this->id;
            return $this->modifier($donner);
        }
        else 
        {
            // ajouter
            return $this->ajouter($donner);
        }

    }

    // supprimer le record acctual
    public function supprimer()
    {
        return $this->executer("DELETE FROM $this->table WHERE id = $this->id");
    }

    // cette function est utilise dans 'enregister'
    // ajouter un nouveau record dans la base de donner
    public function ajouter($donner)
    {
        // joinier les columns
        $cols = join(',', $this->columns);
        $holders = join(',', $this->col_placeholders);
        
        $_donner = array();
        foreach ($this->columns as $col) {
            $_donner[$col] = '';
            if(array_key_exists($col, $donner))
                $_donner[$col] = $donner[$col];
        }

        $sql = "INSERT INTO $this->table ($cols) VALUES ($holders);";
        $stmt = $this->db->prepare($sql);

        return $stmt->execute($_donner);
    }


    // cette function est utilise dans 'enregister'
    // enregister une modification dans la base de donner    
    public function modifier($donner)
    {
        $_cols = array();
        foreach ($this->columns as $col) {
            $_cols[] = $col . "=:" . $col;
        }
        $_cols = join(', ', $_cols);

        $_donner = array();
        foreach ($this->columns as $col) {
            $_donner[$col] = '';
            if(array_key_exists($col, $donner))
                $_donner[$col] = $donner[$col];
        }

        $_donner['id'] = $donner['id'];

        $sql = "UPDATE $this->table SET $_cols WHERE id = :id";
        $stmt = $this->db->prepare($sql);

        return $stmt->execute($_donner);
    }

    // executer un commande sql 
    public function executer($sql)
    {
        return $this->db->exec($sql);
    }

}