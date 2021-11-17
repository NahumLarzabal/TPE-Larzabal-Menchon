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
        $this->view = new LibroView($this->helper->getNombre(),$this->helper->getRol());
        $this->modelCategoria= new CategoriaModel();
        $this->viewCategoria= new CategoriaView($this->helper->getNombre(),$this->helper->getRol());
    }

    function listadoLibros(){
        // no se pasa el checklogin para poder entrar como invitado
        $this->helper->checkLogin();
        $libros = $this->model->getLibros();
        $categorias = $this->modelCategoria->getGeneros();
        $this->view->showLibros($libros,$categorias);
    }
    function viewLibro($id){
        $this->helper->checkLogin();
        $user=$this->helper->getID();
        $libro = $this->model->getLibro($id);
        $this->view->showLibro($libro,$user);
    }
 
    function createLibro(){
        $this->helper->checkLogin();
        if($_FILES['input_name']['type'] == "image/jpg" || $_FILES['input_name']['type'] == "image/jpeg" || $_FILES['input_name']['type'] == "image/png" ){
            $this->model->insertLibro($_POST['autor'], $_POST['nombre_libro'], $_POST['descripcion'], $_POST['precio'], $_POST['id_categoria'], $_FILES['input_name']['tmp_name']);
        }
        else {
            $this->model->insertLibro($_POST['autor'], $_POST['nombre_libro'], $_POST['descripcion'], $_POST['precio'], $_POST['id_categoria']);
        }
        $this->view->showLibroLocation();
    }

    function agregarlibro(){
        $this->helper->checkLogin();
        $rol=$this->helper->getRol();
        if ($rol == "3" || $rol == "4") {
            $this->view->showLibroLocation();
        } else {
            $categorias=$this->modelCategoria->getGeneros();
            $this->view->agregar($categorias);
        }
    }

    function deleteLibro($id){
        $this->helper->checkLogin();
        if($this->helper->getRol()!="3"){
            $this->model->deleteLibroFromDB($id);
            $this->view->showLibroLocation();
        }
        $this->view->showLibroLocation();
    }

    function editarLibro($id){
        $this->helper->checkLogin();
        $libro = $this->model->getLibro($id);
        if ($libro == true){
            if($this->helper->getRol()!="3"){
                $categorias = $this->modelCategoria->getGeneros();
                $this->view->showEdit($libro,$categorias);
            }
            $this->view->showLibroLocation();
        } else {
            $this->view->error();
        }
    }

    function editLibroAction(){
        $this->helper->checkLogin();
        if($this->helper->getRol()!="3"){
            if($_FILES['input_name']['type'] == "image/jpg" || $_FILES['input_name']['type'] == "image/jpeg" || $_FILES['input_name']['type'] == "image/png"){
                $this->model->updateLibroFromDB($_POST['autor'],$_POST['nombre_libro'],$_POST['descripcion'],$_POST['precio'],$_POST['id_categoria'],$_POST['id'],$_FILES['input_name']['tmp_name']);
                $this->view->showLibroLocation();
            }else{
                $this->model->updateLibroFromDB($_POST['autor'],$_POST['nombre_libro'],$_POST['descripcion'],$_POST['precio'],$_POST['id_categoria'],$_POST['id']);
            }
        }
        $this->view->showLibroLocation();
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
