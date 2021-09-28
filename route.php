<?php
require_once "./LibroController/LibroController.php";


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}


$params = explode('/', $action);

$libroController = new LibroController();


// determina que camino seguir según la acción
 switch ($params[0]) {
     case 'home': 
        $libroController->showHome();
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