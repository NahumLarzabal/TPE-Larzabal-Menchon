<?php

class CategoriaModel{

    private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8', 'root', '');
    }

    function getGeneros(){
        $sentencia = $this->db->prepare( "select * from categorias limit 0,10");
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
    function updateCategoriaFromDB($id,$categoria){
        $sentencia = $this->db->prepare("UPDATE  categorias SET categoria=? WHERE categorias.id_categoria =?");
        $sentencia->execute(array($id,$categoria));
    }
    function insertCategoria($id_categoria,$categoria){
        $sentencia = $this->db->prepare("INSERT INTO categorias (id_categoria,categoria) VALUES (?,?)");
        $sentencia->execute(array($id_categoria,$categoria));
    }
    function deleteCategoriaFromDB($id){
        $sentencia = $this->db->prepare("DELETE FROM categorias WHERE categorias.id_categoria = ?");
        $sentencia->execute(array($id));
    }
}