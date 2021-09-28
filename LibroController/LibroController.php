<?php
require_once "./LibroModel/LibroModel.php";
require_once "./LibroView/LibroView.php";

class LibroController{

    private $model;
    private $view;

    function __construct(){
        $this->model = new LibroModel();
        $this->view = new LibroView();
    }

    function showHome(){
        $libros = $this->model->getLibros();
        $categorias = $this->model->getGeneros();
        $this->view->showLibros($libros,$categorias);
    }
    function viewLibro($id){
        $libro = $this->model->getLibro($id);
        $this->view->showLibro($libro);
    }
 
    function createLibro(){
        $this->model->insertLibro($_POST[NULL], $_POST['autor'], $_POST['nombre_libro'], $_POST['descripcion'], $_POST['precio'], $_POST['id_categoria']);
        $categorias=$this->model->getGeneros();
        $this->view->agregar($categorias);
        $this->view->showLibroLocation();
    }
    function agregarlibro(){
        $categorias=$this->model->getGeneros();
        $this->view->agregar($categorias);
    }
    function deleteLibro($id){
        $this->model->deleteLibroFromDB($id);
        $this->view->showHomeLocation();
    }
    function editLibro($id){
        $libro = $this->model->getLibro($id);
        $categorias = $this->model->getGeneros();   
        $this->view->showEdit($libro,$categorias);
    }

    function edit(){
        $this->model->updateLibroFromDB($_POST['autor'],$_POST['nombre_libro'], $_POST['descripcion'], $_POST['precio'],$_POST['id_categoria'],$_POST['id']);
        $this->view->showHomeLocation();
    }
    function editCategoria(){
        $this->model->updateCategoriaFromDB($_POST['categoria'],$_POST['id_categoria']);
        $this->view->showCategoriasLocation();
    
    }
    function viewCategorias(){
        $categorias = $this->model->getGeneros();
        $this->view->showCategorias($categorias);
    }
    
    function showCategoria(){
        $this->view->showCategoria();
        
    }
    function showCategoriaEdit($id){
        $categoria = $this->model->getGenero($id);   
        $this->view->viewCategoriaEdit($categoria);
    }

    function agregarCategoria(){
        $this->model->insertCategoria($_POST[NULL],$_POST['categoria']);
        $this->view->showCategoriasLocation();
    }
    function deleteCategoria($id){
        $this->model->deleteCategoriaFromDB($id);
        $this->view->showCategoriasLocation();
    }
}
