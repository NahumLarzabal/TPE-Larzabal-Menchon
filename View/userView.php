<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';
class userView{
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }
    
    function showLogin($error=""){
        $this->smarty->assign('titulo','LOG IN');
        $this->smarty->assign('error',$error);
        $this->smarty->display('templates/userLogin.tpl');
    }

    function showHome(){
        header("Location: ".BASE_URL."home");
    }

    function showUserCreate(){

    }
    function showCreateLogin($error=""){
        $this->smarty->assign('titulo','CREAR USUARIO');
        $this->smarty->assign('error',$error);
        $this->smarty->display('templates/createUser.tpl');
    }
    function showHomeLogin(){
        header("Location: ".BASE_URL."login");
    }
    function showUser($users=null){
        $this->smarty->assign('users',$users);
        $this->smarty->display('templates/header.tpl');
    }
    
}