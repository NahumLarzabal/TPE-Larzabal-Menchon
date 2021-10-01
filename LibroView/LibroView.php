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
    
    function showCategoriasLocation(){
        header("Location: ".BASE_URL."categorias");
    }
    function showLibroLocation(){
        header("Location: ".BASE_URL."agregarlibro");
    }
       function showLibro($libro){
        $this->smarty->assign('libro', $libro);
        $this->smarty->display('templates/detalle.tpl');
     }

     function showGenero($categorias){
         $this->smarty->assign('categorias', $categorias);
         $this->smarty->display('templates/form_genero.tpl');
     }

     function showEdit($libro,$categorias,$id_genero){
        $this->smarty->assign('titulo','Editar Libro');
        $this->smarty->assign('libro', $libro);
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->assign('id_genero',$id_genero);
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
    function showCategoria(){
        $this->smarty->assign('titulo','Crear Categoria');
        $this->smarty->display('templates/formCategoria.tpl');
    }
    function viewCategoriaEdit($categoria){
        $this->smarty->assign('titulo','Editar Categoria');
        $this->smarty->assign('categorias', $categoria);
        $this->smarty->display('templates/form_editCategoria.tpl');
  
    }
}