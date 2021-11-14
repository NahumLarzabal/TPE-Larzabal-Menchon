<?php
    session_start();
class AuthHelpers{
    private $key;
    function __construct() {
        $this->key = "NAHUMyAGUSTIN";
    }

//    public function baser64url_encode($E){
//         $E = "no";
//         return $E;
//     }

    function checkLogin(){
        
        if (!isset($_SESSION['email'])) {
            header("Location: ".BASE_URL."login");
        }
    }

    //ver como hacer un objeto para traer dotas de roles
    function getNombre(){
        if (isset($_SESSION['nombre_apellido'])) {
            $user = $_SESSION['nombre_apellido'];
            return  $user;
        }
    }
    function getID(){
        if (isset($_SESSION['id'])) {
            return $_SESSION['id'] ;
        }

    } 
    function getRol(){
        if (isset($_SESSION['tipoUser'])) {
            return $_SESSION['tipoUser'] ;
        }

    }

//     function getBasic(){
//     $header = $this->getHeader();
//     if(strpos($header,"Basic")===0){
//         $usrpass=explode(" ",$header)[1];
//         $usrpass = base64_decode($usrpass);
//         $usrpass = explode(":",$usrpass);
//         if(count($usrpass)==2){
//             $user = $usrpass[0];
//             $pass= $usrpass[1];
//             return array(
//                 "user"=> $user,
//                 "pass"=> $pass
//             );
//         }
//     }
//     }

//     function getUser(){
//         $header = $this->getHeader();
//         if(strpos($header,"Bearer")===0){
//             $token = explode(" ",$header)[1];
//             $parts = explode(".", $token);
//             if(count($parts)===3){
//                 $header = $parts[0];
//                 $payload = $parts[1];
//                 $signature = $parts [2];
//                 $new_signature = hash_hmac("SHA256","$header.$payload",$this->key, true);
//                 $new_signature = $this->baser64url_encode($new_signature);
//                 if($signature == $new_signature){
//                     $payload = $this->baser64url_encode($payload);
//                     $payload = json_decode($payload);
//                     if(true /*$payload->exp<$now (el now es el tiempo revisar como implementar el tiempo)*/){
//                         return $payload;
//                     }
//                 }
        
//             }
//         }
//         return null;
//     }

//     function createToken(){
//         $header = array(
//             'alg'=> 'HS256',
//             "typ"=>'JWT'
//         );
//         $payload= array(
//             "sub"=> 1,
//             "name"=> $user["user"],
//             "rol"=> ["admin","other"]
//         );
//         $header =json_encode($header);
//         $payload = json_encode($payload);
//         $header = $this->baser64url_encode($header);
//         $payload = $this->baser64url_encode($payload);
//         $signature = hash_hmac("SHA256","$header.$payload",$this->key, true);
//         $signature = $this->baser64url_encode($signature);
//         return "$header.$payload.$signature";

//     }

//     function getHeader(){
//         if(isset($_SERVER["REDIRECT_HTTP_AUTHORIZATION"])){
//             return $_SERVER["REDIRECT_HTTP_AUTHORIZATION"];
//         }
//         if(isset($_SERVER["HTTP_AUTHORIZATION"])){
//             return $_SERVER["HTTP_AUTHORIZATION"];

//         }
//         return null;
//     }
 }