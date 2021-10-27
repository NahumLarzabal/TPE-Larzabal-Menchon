<?php

class ComentariosModel{
    private $db;
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8', 'root', '');
    }

    function getComentarios(){
        $sentencia = $this->db->prepare( "select * from comentarios");
        $sentencia->execute();
        $tareas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $tareas;
    }

    function getComentarioLibro($id){
        $sentencia = $this->db->prepare( "select * from comentarios WHERE id_libro=?");
        $sentencia->execute(array($id));
        $tareas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $tareas;
    }
    function getComentario($id){
        $sentencia = $this->db->prepare( "select * from comentarios WHERE id=?");
        $sentencia->execute(array($id));
        $tareas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $tareas;
    }

    function deleteComment($id){
        $sentencia = $this->db->prepare("DELETE FROM comentarios WHERE comentarios.id= ?");
        $sentencia->execute(array($id));
    }

    function insertComment($comentarios,$puntuacion,$id_libro,$id_user){
        $sentencia = $this->db->prepare("INSERT INTO comentarios (comentarios, puntuacion, id_libro, id_user) VALUES (?, ?, ?, ?)");
        $sentencia->execute(array($comentarios,$puntuacion,$id_libro,$id_user));
        return $this->db->lastInsertId();
    }
}