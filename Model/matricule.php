<?php 

require_once "connection.php";


class matricule{
    
    static private $table="matricules";

    function __construct(){
        $this->db = new Connection();
    }

    function getAll(){
        return $this->db->getAll(self::$table);
    }

}


?>