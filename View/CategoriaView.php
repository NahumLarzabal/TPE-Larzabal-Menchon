<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';
class CategoriaView{
    private $smarty;

    function __construct($email) {
        $this->smarty = new Smarty();
        $this->smarty->assign('email',$email);
    }

    function showCategorias($categorias){
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('templates/listadoCategorias.tpl');
    }
    function agregarCategoria(){
        $this->smarty->assign('titulo','Crear Categoria');
        $this->smarty->display('templates/crearCategoria.tpl');
    }
    function viewCategoriaEdit($categoria){
        $this->smarty->assign('titulo','Editar Categoria');
        $this->smarty->assign('categorias', $categoria);
        $this->smarty->display('templates/form_editCategoria.tpl');
  
    }
    function showCategoriasLocation(){
        header("Location: ".BASE_URL."categorias");
    }
}