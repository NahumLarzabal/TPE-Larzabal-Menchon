<?php

require_once "./Model/userModel.php";
require_once "./View/userView.php";

class UserController{
    private $model;
    private $view;

    function __construct(){
        $this->model = new userModel();
        $this->view = new userView();
    }

    function login(){
        $this->view->showLogin();
    }
    function getUserHeader(){
        $email= $this->model->getUsers();
        $user=$this->model->getUser($email);
        $this->view->showUser($user);
    }

    function verifyLogin(){
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
     
            // Obtengo el usuario de la base de datos
            $user = $this->model->getUser($email);
     
            // Si el usuario existe y las contraseñas coinciden
            if ($user && password_verify($password, $user->password)) {

                session_start();
                $_SESSION["email"] = $email;
                
                $this->view->showHome();
            } else {
                $this->view->showLogin("Acceso denegado");
            }
        }
    }
    
    function logout(){
        session_destroy();  
        $this->view->showLogin("Te Deslogeaste, gracias por tu trabajo");
    }

    function createUser(){
        if(!empty($_POST['email'])&& !empty($_POST['password'])&&!empty($_POST['nombre_apellido'])){
            $userEmail=$_POST['email'];
            $userPassword=password_hash($_POST['password'],PASSWORD_BCRYPT) ;
            $userNombre=$_POST['nombre_apellido'];
           
        $this->model->insertUser($userEmail,$userPassword,$userNombre);
        $this->view->showHomeLogin();
        }else{
            $this->view->showCreateLogin("El EMAIL ya existe");
        }
    }
    function createLogin(){
     $this->view->showCreateLogin();  
    }
}
?>