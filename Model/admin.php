<?php 

require_once "connection.php";
    // -------------------------- Admins only needs login   -DONE-
class admin{
    public $username;
    public $pswrd;
    
    static private $table="users";

    function __construct(){
        $this->db = new Connection();
    }

    function connect($username){
        $result = $this->db->alogin(self::$table, $username);
        return $result;
    }
}


?>