<?php
require_once "./model/model.php";
require_once "./view/view.php";

class TaskController{

    private $model;
    private $view;

    function __construct(){
        $this->model = new TaskModel();
        $this->view = new TaskView();
    }

    function showHome(){
        $libros = $this->model->getTasks();
        $this->view->showTasks($libros);
    }
    function viewTask($id){
        $libro = $this->model->getTask($id);
        $this->view->showTask($libro);
    }
    function viewGenero(){
        $categorias = $this->model->getGenero();
        $this->view->showGenero($categorias);
    }
}
