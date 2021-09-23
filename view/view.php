<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class TaskView {
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function showTasks($libros){
        $this->smarty->assign('titulo', 'Lista de Libros');        
        $this->smarty->assign('libros', $libros);

        $this->smarty->display('templates/lista.tpl');
    }
       function showTask($libro){
        $this->smarty->assign('libro', $libro);
        $this->smarty->display('templates/detalle.tpl');
     }
}