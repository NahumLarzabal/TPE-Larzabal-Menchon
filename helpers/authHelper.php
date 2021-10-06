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

    function getEmail(){
        if (isset($_SESSION['email'])) {
            return $_SESSION['email'] ;
        }
    }   
}