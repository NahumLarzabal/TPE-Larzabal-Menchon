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
        define("libros_x_pagina", 10);
        $this->helper->checkLogin();
        $paginaActual = $_GET['pagina'];
        $paginas = $this->model->paginacion();
        if(!$_GET['pagina'] || $_GET['pagina']>$paginas){
            header("Location: ".BASE_URL."libros?pagina=1");
        }
        $iniciar = ($_GET['pagina']-1)*libros_x_pagina;
        $libros = $this->model->getLibros($iniciar);
        $categorias = $this->modelCategoria->getGeneros();
        $this->view->showLibros($libros, $categorias, $paginas, $paginaActual);
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
            //Operador Ternario
            // a = cond ? b : c;
            /*
             if (cond) {
                 a = b;
             } else {
                 a = c;
             }
             */
            $file = ($_FILES['input_name']['type'] == "image/jpg" || $_FILES['input_name']['type'] == "image/jpeg" || $_FILES['input_name']['type'] == "image/png") ? $_FILES['input_name']['tmp_name'] : null;
            
            // if($_FILES['input_name']['type'] == "image/jpg" || $_FILES['input_name']['type'] == "image/jpeg" || $_FILES['input_name']['type'] == "image/png"){
            // }else{
            //     // $this->model->updateLibroFromDB($_POST['id'], $_POST['autor'],$_POST['nombre_libro'],$_POST['descripcion'],$_POST['precio'],$_POST['id_categoria']);
            //     $file = null;
            // }
            $this->model->updateLibroFromDB($_POST['id'], $_POST['autor'],$_POST['nombre_libro'],$_POST['descripcion'],$_POST['precio'],$_POST['id_categoria'],$file);
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
