<?php
require_once "./Model/LibroModel.php";
require_once "./View/ApiView.php";
require_once "./Model/CategoriaModel.php";
require_once "./Model/userModel.php";
require_once "./Model/ComentariosModel.php";
require_once "./View/LibroView.php";

class ApiController{

    private $model;
    private $view;
    private $modelCategoria;
    private $userModel;
    private $CommentModel;
    private $viewLibro;

    function __construct(){
        $this->model = new LibroModel();
        $this->view = new ApiView();
        $this->modelCategoria= new CategoriaModel();
        $this->userModel = new userModel();
        $this->CommentModel = new ComentariosModel();
        $this->viewLibro = new LibroView();
    }
  /**
     * Devuelve el body del request
     */
    private function getBody() {
        $bodyString = file_get_contents("php://input");
        return json_decode($bodyString);
    }
    private function getBodySelect() {
        $bodyString = file_get_contents("php://option");
        return json_decode($bodyString);
    }

/************************            Comentarios         *************************************/
function getComments(){
    $comment = $this->CommentModel->getComentarios();
    return $this->view->response($comment,200);
}

function getComment($params=null){
    $idComment = $params[':ID']; //pido el parametro :id de la URL que esta en el router
    $idOrderby = $params[':order']; //pido el parametro :order de la URL que esta en el router
    if($idOrderby == "DESC"){
        $comment = $this->CommentModel->getComentarioLibroDesc($idComment);
    }else{
        $comment = $this->CommentModel->getComentarioLibroAsc($idComment);
    }

    if($comment){
        return $this->view->response($comment,200);
    }else{
        return $this->view->response("El comentario con el id=$idComment no existe",404);
    }
}

function getCommentPuntaje($params=null){
    $idComment = $params[':ID'];
    $idOrderby = $params[':order'];
    $idPuntuacion = $params[':puntaje']; 
    //pido los parametros que viene desde la url de router-api que son GET

    if($idOrderby=="DESC"){
        $comment = $this->CommentModel->getComentarioLibroDescPunt($idComment,$idPuntuacion);
    }else{
        $comment = $this->CommentModel->getComentarioLibroAscPunt($idComment,$idPuntuacion);
    }
    if($comment){
        return $this->view->response($comment,200);
    }else{
        return $this->view->response("El comentario con el id=$idComment y puntaje=$idPuntuacion no existe",404);
    }

}

function deleteComment($params=null){
    $idComment = $params[':ID'];
    $idComment2 = $params[':comentarioID'];
    $comment = $this->CommentModel->getComentarioLibroDesc($idComment);
    $comment2 = $this->CommentModel->getComentario($idComment2);

    if(!empty($comment) && !empty($comment2)){
        $this->CommentModel->deleteComment($idComment2);
        return $this->view->response("El comentario de ID=$idComment2 con LibroId = $idComment fue borrada",204);
    }else{
        return $this->view->response("El comentario con ID = $idComment no fue borrada",404);
    }
}
function insertComment($params = null) {
    // obtengo el body del request (json)
    $body = $this->getBody();

    // TODO: VALIDACIONES -> 400 (Bad Request)
    // busco los request de body que inserta en la db
    $id = $this->CommentModel->insertComment($body->comentarios,$body->puntuacion,$body->id_libro,$body->id_user);
    
    if ($id != 0) {
        $this->view->response("El comentario se insertó con el id=$id", 201);
    } else {
        $this->view->response("El comentario no se pudo insertar", 500);
    }
}

function searchPuntuacion($params=null){
    $idComment = $params[':ID'];
    $idComment2 = $params[':comentarioID'];
    $idPuntuacion = $params[':puntuacion'];
    //busco parametro de router-api
    $comment = $this->CommentModel->getComentarioLibroDesc($idComment); // busca en orde desc lo que encuentre por el id del libro
    $comment2 = $this->CommentModel->getComentario($idComment2); //  traigo los comentarios de este libro en particular
    $comment3 = $this->CommentModel->getPuntuacion($idPuntuacion); // busco el puntaje igual al get de parametro url
    if(!empty($comment) && !empty($comment2)&&!empty($comment3)){
        $this->CommentModel->getSearchPuntuacion($idComment,$idPuntuacion);
        return $this->view->response("El comentario de ID=$idComment2 con LibroId = $idComment y de Puntuacion = $idPuntuacion",204);
    }else{
        return $this->view->response("El parametro de busqueda no existe",404);

    }
}
///************************            Libros         *************************************/

//     function getLibros(){
//         $libros = $this->model->getLibros();
//         return $this->view->response($libros,200);
//     }

//     function getLibro($params=null){
//         $idLibro = $params[':ID'];
//         $libro = $this->model->getLibro($idLibro);
//         if($libro){
//             return $this->view->response($libro,200);
//         }else{
//             return $this->view->response("el Libro con el id=$libro no existe",404);
//         }
//     }

//     function getDeleteLibro($params=null){
//         $idLibro = $params[':ID'];
//         $libro = $this->model->getLibro($idLibro);
//         if($libro){
//             $this->model->deleteLibroFromDB($idLibro);
//             return $this->view->response("El Libro con ID = $idLibro fue borrada",200);
//         }else{
//             return $this->view->response("El Libro con ID = $idLibro no fue borrada",404);
//         }
//     }

//     function insertLibro($params = null) {
//         // obtengo el body del request (json)
//         $body = $this->getBody();

//         // TODO: VALIDACIONES -> 400 (Bad Request)

//         $id = $this->model->insertLibro($body->autor,$body->nombre_libro, $body->descripcion, $body->precio, $body->id_categoria);
        
//         if ($id != 0) {
//             $this->view->response("El Libro se insertó con el id=$id", 200);
//         } else {
//             $this->view->response("El Libro no se pudo insertar", 500);
//         }
//     }

//     function editLibro($params = null) {
//         $idLibro = $params[':ID'];
//         $body = $this->getBody();
        
//         // TODO: VALIDACIONES -> 400 (Bad Request)

//         $libro = $this->model->getLibro($idLibro);

//         if ($libro) {
//             $this->model->updateLibroFromDB($idLibro, $body->autor, $body->nombre_libro, $body->descripcion, $body->precio,$body->id_categoria);
//             $this->view->response("El Libro se actualizó correctamente", 200);
//         } else {
//             return $this->view->response("El Libro con el id=$idLibro no existe", 404);
//         }
//     }

// /************************            Categorias / Generos         *************************************/
// function getCategorias(){
//     $genero = $this->modelCategoria->getGeneros();
//     return $this->view->response($genero,200);
// }
// function getCategoria($params=null){
//     $idGenero = $params[':ID'];
//     $genero = $this->modelCategoria->getGenero($idGenero);
//     if($genero){
//         return $this->view->response($genero,200);
//     }else{
//         return $this->view->response("El Genero con el id=$genero no existe",404);
//     }
// }
// function getDeleteCategoria($params=null){
//     $idGenero = $params[':ID'];
//     $genero = $this->modelCategoria->getGenero($idGenero);
//     if($genero){
//         $this->modelCategoria->deleteCategoriaFromDB($idGenero);
//         return $this->view->response("El Genero con ID = $idGenero fue borrada",200);
//     }else{
//         return $this->view->response("El Genero con ID = $idGenero no fue borrada",404);
//     }
// }

// function insertCategoria($params = null) {
//     // obtengo el body del request (json)
//     $body = $this->getBody();

//     // TODO: VALIDACIONES -> 400 (Bad Request)

//     $id = $this->modelCategoria->insertCategoria($body->categoria);
    
//     if ($id != 0) {
//         $this->view->response("El Genero se insertó con el id=$id", 200);
//     } else {
//         $this->view->response("El Genero no se pudo insertar", 500);
//     }
// }

// function editCategoria($params = null) {
//     $idGenero = $params[':ID'];
//     $body = $this->getBody();
    
//     // TODO: VALIDACIONES -> 400 (Bad Request)

//     $genero = $this->modelCategoria->getGenero($idGenero);

//     if ($genero) {
//         $this->modelCategoria->updateCategoriaFromDB($idGenero, $body->categoria);
//         $this->view->response("El Genero se actualizó correctamente", 200);
//     } else {
//         return $this->view->response("El Genero con el id=$idGenero no existe", 404);
//     }
// }


// /************************            Usuarios         *************************************/
// function getUsers(){
//     $user = $this->userModel->getUsers();
//     return $this->view->response($user,200);
// }
// function getUser($params=null){
//     $idUser = $params[':ID'];
//     $user = $this->userModel->getUser($idUser);
//     if($user){
//         return $this->view->response($user,200);
//     }else{
//         return $this->view->response("El usuario con el id=$idUser no existe",404);
//     }
// }
// function getDeleteUser($params=null){
//     $idUser = $params[':ID'];
//     $user = $this->userModel->getUser($idUser);
//     if($user){
//         $this->userModel->deleteUser($idUser);
//         return $this->view->response("El usuario con ID = $idUser fue borrada",200);
//     }else{
//         return $this->view->response("El usuario con ID = $idUser no fue borrada",404);
//     }
// }

// function insertUser($params = null) {
//     // obtengo el body del request (json)
//     $body = $this->getBody();
//     $user = $this->userModel->getUsers();
//     $password = password_hash($body->password ,PASSWORD_BCRYPT);

//     // TODO: VALIDACIONES -> 400 (Bad Request)

//    $this->userModel->insertUser($body->email,$password,$body->nombre_apellido);
    
//     if ($body->email != $user) {
//         $this->view->response("El usuario se insertó con el id=$body->email", 200);
//     } else {
//         $this->view->response("El usuario no se pudo insertar", 500);
//     }
// }
}

