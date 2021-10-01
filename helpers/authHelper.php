<?php
class AuthHelpers{
    function __construct() {
    }
    function checkLogin(){
        session_start();
        if (!isset($_SESSION['email'])) {
            header("Location: ".BASE_URL."login");
        }
    }
   
}