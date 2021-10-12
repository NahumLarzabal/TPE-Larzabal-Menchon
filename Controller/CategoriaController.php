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
        $this->view = new CategoriaView($this->helper->getEmail());
    }

    function showHome(){
        //$this->helper->checkLogin();
        $categorias = $this->model->getGeneros();
        $this->view->showCategoria($categorias);
    }
    
    function editCategoria(){
        $this->helper->checkLogin();
        $this->model->updateCategoriaFromDB($_POST['categoria'],$_POST['id_categoria']);
        $this->view->showCategoriasLocation();
    
    }
    function viewCategorias(){
        $this->helper->checkLogin();
        $categorias = $this->model->getGeneros();
        $this->view->showCategorias($categorias);
    }
    
    function showCategoria(){
        $this->helper->checkLogin();
        $this->view->showCategoria();
        
    }
    function showCategoriaEdit($id){
        $this->helper->checkLogin();
        $categoria = $this->model->getGenero($id);   
        $this->view->viewCategoriaEdit($categoria);
    }

    function agregarCategoria(){
        $categoria = $_POST['categoria'];
        $this->helper->checkLogin();
        $this->model->insertCategoria($_POST[NULL],$categoria);
        $this->view->showCategoriasLocation();
    }
    function deleteCategoria($id){
        $this->helper->checkLogin();
        $this->model->deleteCategoriaFromDB($id);
        $this->view->showCategoriasLocation();
    }
    
}
