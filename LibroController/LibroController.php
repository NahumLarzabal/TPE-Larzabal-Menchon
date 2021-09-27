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
        $this->model->insertLibro($_POST[NULL],$_POST['autor'],$_POST['nombre_libro'], $_POST['description'], $_POST['precio'],$_POST['id_categoria']);
        $categorias=$this->model->getGeneros();
        $this->view->agregar($categorias);
        $this->view->showHomeLocation();
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
        $categorias = $this->model->getGenero($id);   
        $this->view->showEdit($libro,$categorias);
    }

    function edit($id){
        $this->model->updateLibroFromDB($id);
        $this->view->showHomeLocation();
    }
}
