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
        $this->view = new LibroView($this->helper->getNombre());
        $this->modelCategoria= new CategoriaModel();
        $this->viewCategoria=new CategoriaView($this->helper->getNombre());
    }

    function showHome(){
        // no se pasa el checklogin para poder entrar como invitado
        //$this->helper->checkLogin();
        $libros = $this->model->getLibros();
        $categorias = $this->modelCategoria->getGeneros();
        $this->view->showLibros($libros,$categorias);
    }
    function viewLibro($id){
        $this->helper->checkLogin();
        $libro = $this->model->getLibro($id);
        $user=$this->helper->getID();
        $this->view->showLibro($libro,$user);
    }
 
    function createLibro(){
        $this->helper->checkLogin();
        $this->model->insertLibro($_POST['autor'], $_POST['nombre_libro'], $_POST['descripcion'], $_POST['precio'], $_POST['id_categoria']);
        //$categorias = $this->modelCategoria->getGeneros();
        // $this->view->agregar($categorias);
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

    function searchAutor(){
        $categorias = $this->modelCategoria->getGeneros();
        $libros = $this->model->searchModelAutor($_POST['autorIn']);
        $this->view->searchView($libros,$categorias);
    }

    function searchTitulo(){
        $categorias = $this->modelCategoria->getGeneros();       
        $libros = $this->model->searchModelTitulo($_POST['tituloIn']);
        $this->view->searchView($libros,$categorias);
    }
    function searchGenero(){
        $categorias = $this->modelCategoria->getGeneros();
        $libros = $this->model->searchModelGenero($_POST['generoIn']);
        $this->view->searchView($libros,$categorias);
    }

    function inicio(){
        $this->view->home();
    }
  
}
