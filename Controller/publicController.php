<?php 
require_once 'model/matricule.php';

class publicController{
    public function index(){
        if (isset($_SESSION['admin'])){
            header('Location: '. BASE_URL .'/Sebelta/admin/matricules');
        }else{
            header('Location: '. BASE_URL .'/Sebelta/public/login');
        }
    }
    function login(){
        if (isset($_SESSION['admin'])){
            header('Location: '. BASE_URL .'/Sebelta/admin/matricules');
        }else{
            require __DIR__ . '/../View/login.php';
        }
    }
}

?>