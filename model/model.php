<?php

class Model{

    private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8', 'root', '');
    }
    function getLibros(){
        $sentencia = $this->db->prepare("select * from libros");
        $sentencia->execute();
        $libros = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $libros;
    } 
}