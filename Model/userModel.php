<?php

class userModel{

    private $db;
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_userTP;charset=utf8', 'root', '');
    }
        function getUser($email){
            $query = $this->db->prepare('SELECT * FROM users WHERE email = ?');
            $query->execute([$email]);
            return $query->fetch(PDO::FETCH_OBJ);
        }
        function getUsers(){
            $query = $this->db->prepare('SELECT * FROM users');
            $query->execute();
            return $query->fetch(PDO::FETCH_OBJ);
        }

        function insertUser($userEmail,$userPassword,$userNombre){
            $query = $this->db->prepare('INSERT INTO users (email, password,nombre_apellido) VALUES (?,?,?)');
            $query->execute([$userEmail,$userPassword,$userNombre]);
        }
}