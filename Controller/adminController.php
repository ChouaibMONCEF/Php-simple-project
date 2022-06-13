<?php 
require_once 'model/matricule.php';
require_once 'model/admin.php';

class adminController{
    function Matricules(){
        if (isset($_SESSION['admin'])){
            $obj = new matricule;
            $matricules = $obj->getAll();
            require __DIR__ . '/../View/matricules.php';
        }else{
            header('Location: '. BASE_URL .'/Sebelta/public/login');
        }
    }

    public function login(){
        if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['pswrd']) && !empty($_POST['pswrd'])){
            $obj = new admin;

            $username = filter_var($_POST['username'], FILTER_SANITIZE_STRIPPED);
            $pswrd = filter_var($_POST['pswrd'], FILTER_SANITIZE_STRIPPED);


            $login = $obj->connect($username);

            if( !isset($login) ){
                header('Location: '. BASE_URL .'/Sebelta/public/login');
            }else{
                    if(!password_verify( $pswrd , $login->password)){
                        header('Location: '. BASE_URL .'/Sebelta/public/login');
                    }else{
                        $_SESSION['admin'] = $login->username;
                        header('Location: '. BASE_URL .'/Sebelta/admin/matricules');
                    }
            }
        }
    }

    function logout(){
        if (isset($_SESSION['admin'])) {
        session_destroy();
        header('Location: '. BASE_URL .'/Sebelta/public/login');
        }else {
            header('Location: '. BASE_URL .'/Sebelta/public/login');
        }
    }

}

?>