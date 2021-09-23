<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';
class View{
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function showTasks($libros){
        $this->smarty->assign('titulo','Titulo de Tarea');
        $this->smarty->assign('autor', $libros);
        $this->smarty->display('templetes/lista.tpl');
    }
    function showHomeLocation(){
        header("Location: ".BASE_URL."home");
    }
       function showTask($libro){
        $this->smarty->assign('libro', $libro);
        $this->smarty->display('templates/detalle.tpl');
     }
}