<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';
class LibroView{
    private $smarty;

    function __construct($email) {
        $this->smarty = new Smarty();
        $this->smarty->assign('email',$email);
    }

    function showLibros($libros,$categorias){
        $this->smarty->assign('titulo','Titulo de Libro');
        $this->smarty->assign('libros', $libros);
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('templates/form_table.tpl');
    }
    function showHomeLocation(){
        header("Location: ".BASE_URL."libros");
    }

    function home(){
        $this->smarty->display('templates/home.tpl');
    }

    function showLibroLocation(){
        header("Location: ".BASE_URL."libros");
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
     
    function searchView($libros,$categorias){
        $this->smarty->assign('titulo','Filtro');
        $this->smarty->assign('libros', $libros);
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('templates/search.tpl');
    }
}