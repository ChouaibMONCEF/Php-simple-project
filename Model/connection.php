<?php

// -------------------------------------- -DONE-

class connection
{
    public $servername = 'localhost';
    public $username = 'root';
    public $password = '';
    public $dbname = 'sebelta';
    public $sql;

    public function __construct()
    {
        try {
            $this->sql = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
        } catch (PDOException $e) {
            echo "connection failed:" . $e->getMessage();
        }
    }

    // ----------------------------------------------------------------getAll

    public function getAll($table)
    {
        $query = "SELECT * from " . $table;
        return $this->sql->query($query)->fetchAll();
    }


    public function login($table, $email)
    {
        $query = "SELECT * from $table WHERE email = '$email'";
        // die($query);
      if(empty($this->sql->query($query)->fetch(PDO::FETCH_OBJ))){
        return false;
      }else{
          return $this->sql->query($query)->fetch(PDO::FETCH_OBJ);
      }
    }

    // ----------------------------------------------------------------delete

    public function delete($table, $id)
    {
        $query = "DELETE from $table WHERE id= " . $id;
        $this->sql->query($query);
    }

    // ----------------------------------------------------------------add

    public function add($table, $tabName, $tabValue)
    {
        $name = "";
        $value = "";
        $vrg = "";
        for ($i = 0; $i < count($tabName); $i++) {
            if ($i > 0) {
                $vrg = ",";
            }
            $name .= $vrg . "`" . $tabName[$i] . "`";
        }

        $vrg = "";
        for ($i = 0; $i < count($tabValue); $i++) {
            if ($i > 0) {
                $vrg = ",";
            }
            $value .= $vrg . "'" . $tabValue[$i] . "'";
        }
        $query = "INSERT INTO " . $table . "(" . $name . ") VALUES (" . $value . ")";

        if ($this->sql->query($query)) {
            return true;
        }

        return false;
    }

    // ----------------------------------------------------------------update

    public function update($table, $tabName, $tabValue, $id)
    {
        $name = "";
        $value = "";
        $vrg = "";
        for ($i = 0; $i < count($tabName); $i++) {
            if ($i > 0) {
                $vrg = ",";
            }
            
            $name .= $vrg . "`" . $tabName[$i] . "`='" . $tabValue[$i] . "'";
        }

        $query = "UPDATE " . $table . " SET" . $name . " WHERE id=" . $id;

        $this->sql->query($query);
    }

    // ---------------------------------------------------------------add

    public function edit($table, $id)
    {
        $query = "SELECT * FROM " . $table . "WHERE id=" . $id;
        return $this->sql->query($query)->fetchAll()[0];
    }

    public function selectById($table ,$id)
    {

        $query = "SELECT * FROM ". $table . " WHERE id=" . $id;

        
        if ($this->sql->query($query)) {
            return $this->sql->query($query)->fetchAll();
        } else {
            echo "Error";
        }
        
    }

    public function alogin($table, $username)
    {
          $query = "SELECT * from $table WHERE username = '$username'";
        // die($query);
      if(empty($this->sql->query($query)->fetch(PDO::FETCH_OBJ))){
        return false;
      }else{
          return $this->sql->query($query)->fetch(PDO::FETCH_OBJ);
      }
    }

}