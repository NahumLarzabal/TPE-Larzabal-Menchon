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
        $libroController->showHome();
        //$categoriaController->showHome();
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
        $libroController->editCategoria(); 
        break;
    case 'showCategoriaEdit':
        $libroController->showCategoriaEdit($params[1]); 
            break;
     case 'agregarlibro':
        $libroController->agregarlibro();
        break;
     case 'deleteCategoria': 
        $libroController->deleteCategoria($params[1]); 
        break;
     case 'showCategoria':
        $libroController->showCategoria();
        break;
     case 'agregarCategoria':
        $libroController->agregarCategoria();
        break;
     case 'categorias':
        $libroController->viewCategorias();
        break;
     case 'viewLibro': 
        $libroController->viewLibro($params[1]); 
        break;
     default: 
        echo('404 Page not found'); 
        break;
 }


?>