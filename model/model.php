<?php

class TaskModel{

    private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8', 'root', '');
    }

    function getTasks(){
        $sentencia = $this->db->prepare( "select libros.autor, libros.nombre_libro, libros.precio, categorias.categoria from libros join categorias on libros.id_categoria = categorias.id_categoria");
        $sentencia->execute();
        $tareas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $tareas;
    }  
    function getTask($id){
        $sentencia = $this->db->prepare( "SELECT libros.autor, libros.nombre_libro, libros.descripcion, libros.precio, categorias.categoria FROM libros JOIN categorias ON libros.id_categoria = categorias.id_categoria WHERE id=?;");
        $sentencia->execute(array($id));
        $tarea = $sentencia->fetch(PDO::FETCH_OBJ);
        return $tarea;
    }
    function getGenero(){
        $sentencia = $this->db->prepare( "select categorias.categoria from categorias");
        $sentencia->execute();
        $tareas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $tareas;
    }
}