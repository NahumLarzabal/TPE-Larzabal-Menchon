<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';
class LibroView{
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function showLibros($libros,$categorias){
        $this->smarty->assign('titulo','Titulo de Libro');
        $this->smarty->assign('libros', $libros);
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('templates/form_table.tpl');
    }
    function showHomeLocation(){
        header("Location: ".BASE_URL."home");
    }
       function showLibro($libro){
        $this->smarty->assign('libro', $libro);
        $this->smarty->display('templates/detalle.tpl');
     }

     function showGenero($categorias){
         $this->smarty->assign('categorias', $categorias);
         $this->smarty->display('templates/form_genero.tpl');
     }

     function showEdit($libro,$categorias){
        $this->smarty->assign('titulo','Editar Libro');
        $this->smarty->assign('libro', $libro);
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('templates/form_edit.tpl');
     }

     function agregar($categorias){
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('templates/createLibro.tpl');
     } 

     function showCategorias($categorias){
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('templates/listadoCategorias.tpl');
    }
}