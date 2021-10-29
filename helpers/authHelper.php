<?php
    session_start();
class AuthHelpers{
    function __construct() {
    }
    function checkLogin(){
        
        if (!isset($_SESSION['email'])) {
            header("Location: ".BASE_URL."login");
        }
    }

    function getNombre(){
        if (isset($_SESSION['nombre_apellido'])) {
            return $_SESSION['nombre_apellido'] ;
        }
    }
    function getID(){
        if (isset($_SESSION['id'])) {
            return $_SESSION['id'] ;
        }

    } 
}