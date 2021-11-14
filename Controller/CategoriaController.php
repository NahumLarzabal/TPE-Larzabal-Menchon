<?php
require_once "./Model/CategoriaModel.php";
require_once "./View/CategoriaView.php";
require_once "./helpers/authHelper.php";

class CategoriaController{

    private $model;
    private $view;
    private $helper;


    function __construct(){
        $this->helper = new AuthHelpers();
        $this->model = new CategoriaModel();
        $this->view = new CategoriaView($this->helper->getNombre());
    }

    function editCategoria(){
        $this->helper->checkLogin();
        if($this->helper->getRol()!="3"){
            $this->model->updateCategoriaFromDB($_POST['categoria'],$_POST['id_categoria']);
            $this->view->showCategoriasLocation();
        }
        $this->view->showCategoriasLocation();
    }
    function viewCategorias(){
        $this->helper->checkLogin();
        $categorias = $this->model->getGeneros();
        $rol = $this->helper->getRol();
        $this->view->showCategorias($categorias,$rol);
    }
    
    function showCategoria(){
        $this->helper->checkLogin();
        $this->view->agregarCategoria();
        
    }
    function showCategoriaEdit($id){
        $this->helper->checkLogin();
        if($this->helper->getRol()!="3"){
            $categoria = $this->model->getGenero($id);   
            $this->view->viewCategoriaEdit($categoria);
        }
        $this->view->showCategoriasLocation();
    }

    function agregarCategoria(){
        $categoria = $_POST['categoria'];
        $this->helper->checkLogin();
        $this->model->insertCategoria($categoria);
        $this->view->showCategoriasLocation();
    }
    function deleteCategoria($id){
        $this->helper->checkLogin();
        if($this->helper->getRol()!="3"){
            $this->model->deleteCategoriaFromDB($id);
            $this->view->showCategoriasLocation();
        }
        $this->view->showCategoriasLocation();
    }
    
}
