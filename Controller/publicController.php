<?php 
require_once 'model/matricule.php';

class publicController{
    public function index(){
        if (isset($_SESSION['admin'])){
            header('Location: http://localhost/Sebelta/admin/matricules');
        }else{
            header('Location: http://localhost/Sebelta/public/login');
        }
    }
    function login(){
        if (isset($_SESSION['admin'])){
            header('Location: http://localhost/Sebelta/admin/matricules');
        }else{
            require __DIR__ . '/../View/login.php';
        }
    }
}

?>