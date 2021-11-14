<?php
require_once "./Controller/LibroController.php";
require_once "./Controller/userController.php";
require_once "./Controller/CategoriaController.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}


$params = explode('/', $action);

$libroController = new LibroController();
$userController = new UserController();
$categoriaController = new CategoriaController();


// determina que camino seguir según la acción
 switch ($params[0]) {
   case 'login': 
      $userController->login();
      break;
   case 'logout': 
      $userController->logout();
      break;
   case 'verify': 
      $userController->verifyLogin();
      break;
   case 'createUser':
      $userController->createUser();
      break;
   case 'createLogin':
      $userController->createLogin();
      break;
   case 'home': 
      $libroController->inicio();
      break;
   case 'libros': 
      if( !empty($params[1]) && $params[1]=="agregarlibro"){
         $libroController->agregarlibro();
      } else if(empty($params[1])){
         $libroController->showHome();
      } else {
         $libroController->inicio();
      }
      break;
   case 'createLibro': 
      $libroController->createLibro(); 
      break;
   case 'deleteLibro': 
      $libroController->deleteLibro($params[1]); 
      break;
   case 'editLibro': 
      $libroController->editLibro($params[1]); 
      break;
   case 'edit': 
      $libroController->edit(); 
      break; 
   case 'editCategoria': 
      $categoriaController->editCategoria(); 
      break;
   case 'agregarCategoria':
      $categoriaController->agregarCategoria();
      break;
   case 'showCategoriaEdit':
      $categoriaController->showCategoriaEdit($params[1]); 
      break;
   case 'deleteCategoria': 
      $categoriaController->deleteCategoria($params[1]); 
      break;
   case 'generos':
      if( !empty($params[1]) && $params[1]=="agregarCategoria"){
         $categoriaController->showCategoria();
      } else if(empty($params[1])){
         $categoriaController->viewCategorias();
      } else {
         $libroController->inicio();
      }
      break;
   case 'viewLibro': 
      $libroController->viewLibro($params[1]); 
      break;
   case 'search': 
      if($params[1]=="titulo"){
      $libroController->searchTitulo(); 
      } else if($params[1]=="autor"){
         $libroController->searchAutor();
      }else if($params[1]=="genero"){
         $libroController->searchGenero(); 
      }
      break;
   case 'usuario':
      $userController->mostrarUsuario($params[1]);
      break;
   case 'usuarios':
      $userController->mostrarUsuarios();
      break;
   case 'editarUsuario':
      $userController->editarUsuario();
      break;
   default: 
      echo('404 Page not found'); 
      break;
 }


?>