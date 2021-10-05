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
    // function viewLibro($id){
    //     $this->helper->checkLogin();
    //     $libro = $this->model->getLibro($id);
    //     $this->view->showLibro($libro);
    // }
 
    // function createLibro(){
    //     $this->helper->checkLogin();
    //     $this->model->insertLibro($_POST[NULL], $_POST['autor'], $_POST['nombre_libro'], $_POST['descripcion'], $_POST['precio'], $_POST['id_categoria']);
    //     $categorias=$this->model->getGeneros();
    //     $this->view->agregar($categorias);
    //     $this->view->showLibroLocation();
    // }
    // function agregarlibro(){
    //     $this->helper->checkLogin();
    //     $categorias=$this->model->getGeneros();
    //     $this->view->agregar($categorias);
    // }
    // function deleteLibro($id){
    //     $this->helper->checkLogin();
    //     $this->model->deleteLibroFromDB($id);
    //     $this->view->showHomeLocation();
    // }
    // function editLibro($id){
    //     $this->helper->checkLogin();
    //     $libro = $this->model->getLibro($id);
    //     $categorias = $this->model->getGeneros();
    //     $id_genero=$this->model->getSelectGenero($id);
    //     $this->view->showEdit($libro,$categorias,$id_genero);
    // }

    // function edit(){
    //     $this->helper->checkLogin();
    //     $this->model->updateLibroFromDB($_POST['autor'],$_POST['nombre_libro'], $_POST['descripcion'], $_POST['precio'],$_POST['id_categoria'],$_POST['id']);
    //     $this->view->showHomeLocation();
    // }

    
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
        $this->helper->checkLogin();
        $this->model->insertCategoria($_POST[NULL],$_POST['categoria']);
        $this->view->showCategoriasLocation();
    }
    function deleteCategoria($id){
        $this->helper->checkLogin();
        $this->model->deleteCategoriaFromDB($id);
        $this->view->showCategoriasLocation();
    }
    
}
