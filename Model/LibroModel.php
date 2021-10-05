<?php

class LibroModel{

    private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8', 'root', '');
    }

    function getLibros(){
        $sentencia = $this->db->prepare( "select libros.id, libros.autor, libros.nombre_libro, libros.precio, categorias.categoria, libros.id_categoria from libros join categorias on libros.id_categoria = categorias.id_categoria");
        $sentencia->execute();
        $tareas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $tareas;
    }  
    function getLibro($id){
        $sentencia = $this->db->prepare( "SELECT libros.id, libros.autor, libros.nombre_libro, libros.descripcion, libros.precio, libros.id_categoria,categorias.categoria FROM libros JOIN categorias ON libros.id_categoria = categorias.id_categoria WHERE id=?;");
        $sentencia->execute(array($id));
        $tarea = $sentencia->fetch(PDO::FETCH_OBJ);
        return $tarea;
    }
   

    function insertLibro($id,$autor,$nombre_libro, $descripcion, $precio, $genero){
        $sentencia = $this->db->prepare("INSERT INTO libros (id,autor, nombre_libro, descripcion, precio, id_categoria) VALUES (?,?, ?, ?, ?, ?)");
        $sentencia->execute(array($id,$autor,$nombre_libro, $descripcion, $precio, $genero ));
    }
    function deleteLibroFromDB($id){
        $sentencia = $this->db->prepare("DELETE FROM libros WHERE libros.id = ?");
        $sentencia->execute(array($id));
    }
    function updateLibroFromDB($id,$autor,$nombre_libro, $descripcion, $precio, $genero){
        $sentencia = $this->db->prepare("UPDATE  libros SET autor=?,nombre_libro=?,descripcion=?,precio=?,id_categoria=? WHERE libros.id = ?");
        $sentencia->execute(array($id,$autor,$nombre_libro, $descripcion, $precio, $genero));
    }
 

    function insertEditLibro($id,$precio){
        $sentencia = $this->db->prepare("INSERT INTO libros (id,precio ) VALUES (?,?)");
        $sentencia->execute(array($id, $precio ));
    }
   function searchFiltro(){
       $sentencia =$this->db->prepare("SELECT * FROM libros WHERE id_categoria=3");
       $sentencia->execute();
       $tarea = $sentencia->fetch(PDO::FETCH_OBJ);
        return $tarea;
   }
}