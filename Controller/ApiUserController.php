<?php
require_once "./View/ApiView.php";
require_once "./Model/userModel.php";
require_once "./helpers/authHelper.php";



class ApiUserController{

    private $model;
    private $view;
    private $helper;

    function __construct(){
        $this->view = new ApiView();
        $this->model = new userModel();
        $this->helper= new AuthHelpers();
    }

// function getToken(){
//     $userpass = $this->helper->getBasic();
//     //verificar el header basuc user:pass
//     $user = array("user"=>$userpass["user"]);
//     if(true){

//     }
//     //crhear con db
//     //devolver token
// }

// function obetnerUsuario($params = null){
//     $id = $params[":ID"];
//     $user = $this->helper->getUser();
//     if($user)
//     if($id == $user->sub){
//         $this->view->response("$user",200);
//     }else{

//         $this->view->response("fail",403);
//     }
//     $this->view->response("fail",404);


// }
}