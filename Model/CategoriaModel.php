<?php

class CategoriaModel{

    private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8', 'root', '');
    }

    function getGeneros(){
        $sentencia = $this->db->prepare( "select * from categorias");
        $sentencia->execute();
        $categorias = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $categorias;
    }
    function getGenero($id){
        $sentencia = $this->db->prepare( "select * from categorias WHERE id_categoria=?");
        $sentencia->execute(array($id));
        $categoria = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $categoria;
    }
    function updateCategoriaFromDB($id,$categoria){
        $sentencia = $this->db->prepare("UPDATE  categorias SET categoria=? WHERE categorias.id_categoria =?");
        $sentencia->execute(array($id,$categoria));
    }
    function insertCategoria($categoria){
        $sentencia = $this->db->prepare("INSERT INTO categorias (categoria) VALUES (?)");
        $sentencia->execute(array($categoria));
        return $this->db->lastInsertId();
    }
    
    function deleteCategoriaFromDB($id){
        $sentencia = $this->db->prepare("DELETE FROM categorias WHERE categorias.id_categoria = ?");
        $sentencia->execute(array($id));
    }
}