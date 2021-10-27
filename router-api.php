<?php
require_once 'libs/Router.php';
require_once 'Controller/ApiController.php';
$router = new Router();

$router->addRoute('libros','GET','ApiController','getLibros');
$router->addRoute('libros/:ID','GET','ApiController','getLibro');
$router->addRoute('libros/:ID','DELETE','ApiController','getDeleteLibro');
$router->addRoute('libros','POST','ApiController','insertLibro');
$router->addRoute('libros/:ID','PUT','ApiController','editLibro');
$router->addRoute('categorias','GET','ApiController','getCategorias');
$router->addRoute('categorias/:ID','GET','ApiController','getCategoria');
$router->addRoute('categorias/:ID','DELETE','ApiController','getDeleteCategoria');
$router->addRoute('categorias','POST','ApiController','insertCategoria');
$router->addRoute('categorias/:ID','PUT','ApiController','editCategoria');
$router->addRoute('usuarios','GET','ApiController','getUsers');
$router->addRoute('usuarios/:ID','GET','ApiController','getUser');
$router->addRoute('usuarios/:ID','DELETE','ApiController','getDeleteUser');
$router->addRoute('usuarios','POST','ApiController','insertUser');
$router->addRoute('libros/:ID/comentarios','GET','ApiController','');
$router->addRoute('libros/:ID/comentarios','POST','ApiController','');
$router->addRoute('libros/:ID/comentarios/:IDcomentario','DELETE','ApiController','');







$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);
