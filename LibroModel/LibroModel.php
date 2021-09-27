<?php

class LibroModel{

    private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8', 'root', '');
    }

    function getLibros(){
        $sentencia = $this->db->prepare( "select libros.id, libros.autor, libros.nombre_libro, libros.precio, categorias.categoria from libros join categorias on libros.id_categoria = categorias.id_categoria");
        $sentencia->execute();
        $tareas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $tareas;
    }  
    function getLibro($id){
        $sentencia = $this->db->prepare( "SELECT libros.id, libros.autor, libros.nombre_libro, libros.descripcion, libros.precio, categorias.categoria FROM libros JOIN categorias ON libros.id_categoria = categorias.id_categoria WHERE id=?;");
        $sentencia->execute(array($id));
        $tarea = $sentencia->fetch(PDO::FETCH_OBJ);
        return $tarea;
    }
    function getGeneros(){
        $sentencia = $this->db->prepare( "select * from categorias");
        $sentencia->execute();
        $tareas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $tareas;
    }
    function getGenero($id){
        $sentencia = $this->db->prepare( "select * from categorias WHERE id_categoria=?");
        $sentencia->execute(array($id));
        $tareas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $tareas;
    }

    function insertLibro($id,$autor,$nombre_libro, $descripcion, $precio, $genero){
        $sentencia = $this->db->prepare("INSERT INTO libros (id,autor, nombre_libro, descripcion, precio, id_categoria) VALUES (?,?, ?, ?, ?, ?)");
        $sentencia->execute(array($id,$autor,$nombre_libro, $descripcion, $precio, $genero ));
    }
    function deleteLibroFromDB($id){
        $sentencia = $this->db->prepare("DELETE FROM libros WHERE libros.id = ?");
        $sentencia->execute(array($id));
    }
    function updateLibroFromDB($id){
        var_dump(array($id) );
        $sentencia = $this->db->prepare("UPDATE  libros SET descripcion=?,precio=? WHERE libros.id = ?");
        $sentencia->execute(array($id));
    }
}