<?php
require_once 'libs/smarty-3.1.39/libs/Smarty.class.php';
class View{
    private $smarty;

    function __construct(){
       $this->$smarty = new Smarty();
    }

    function showTasks($tasks){
        $this->smarty->assign('titulo','Titulo de Tarea');
        $this->smarty->assign('tasks',$tasks);
        $this->smarty->display('templates/taskList.tpl');
    }
}