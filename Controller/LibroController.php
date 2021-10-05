<?php
require_once "./Model/LibroModel.php";
require_once "./View/LibroView.php";
require_once "./helpers/authHelper.php";
require_once "./Model/CategoriaModel.php";
require_once "./View/CategoriaView.php";

class LibroController{

    private $model;
    private $view;
    private $helper;
    private $modelCategoria;
    private $viewCategoria;

    function __construct(){
        $this->helper = new AuthHelpers();
        $this->model = new LibroModel();
        $this->view = new LibroView($this->helper->getEmail());
        $this->modelCategoria= new CategoriaModel();
        $this->viewCategoria=new CategoriaView($this->helper->getEmail());
    }

    function showHome(){
       //$this->helper->checkLogin();
        $libros = $this->model->getLibros();
        $categorias = $this->modelCategoria->getGeneros();
        $this->view->showLibros($libros,$categorias);
    }
    function viewLibro($id){
        $this->helper->checkLogin();
        $libro = $this->model->getLibro($id);
        $this->view->showLibro($libro);
    }
 
    function createLibro(){
        $this->helper->checkLogin();
        $this->model->insertLibro($_POST[NULL], $_POST['autor'], $_POST['nombre_libro'], $_POST['descripcion'], $_POST['precio'], $_POST['id_categoria']);
        $categorias=$this->modelCategoria->getGeneros();
        $this->view->agregar($categorias);
        $this->view->showLibroLocation();
    }
    function agregarlibro(){
        $this->helper->checkLogin();
        $categorias=$this->modelCategoria->getGeneros();
        $this->view->agregar($categorias);
    }
    function deleteLibro($id){
        $this->helper->checkLogin();
        $this->model->deleteLibroFromDB($id);
        $this->view->showHomeLocation();
    }
    function editLibro($id){
        $this->helper->checkLogin();
        $libro = $this->model->getLibro($id);
        $categorias = $this->modelCategoria->getGeneros();
        $this->view->showEdit($libro,$categorias);
    }

    function edit(){
        $this->helper->checkLogin();
        $this->model->updateLibroFromDB($_POST['autor'],$_POST['nombre_libro'], $_POST['descripcion'], $_POST['precio'],$_POST['id_categoria'],$_POST['id']);
        $this->view->showHomeLocation();
    }

    function search(){
        $categorias = $this->modelCategoria->getGeneros();
        $libros = $this->model->searchModel($_POST['autorIn']);
        $this->view->searchView($libros,$categorias);
    }
  
}
