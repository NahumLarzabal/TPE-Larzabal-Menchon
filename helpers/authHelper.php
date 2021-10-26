<?php
    session_start();
class AuthHelpers{
    function __construct() {
    }
    function checkLogin(){
        if (!isset($_SESSION['email'])) {
            header("Location: ".BASE_URL."login");
        }
        die;
    }

    function getNombre(){
        if (isset($_SESSION['nombre_apellido'])) {
            return $_SESSION['nombre_apellido'] ;
        }
    }   
}