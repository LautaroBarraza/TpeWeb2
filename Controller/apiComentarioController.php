<?php
include_once "./Model/comentariosModel.php";
include_once "./View/apiView.php";


class ApiComentarioController extends apiController{
    function __construct()
    {

        parent::__construct();
       $this->model = new comentariosModel();

        
    }

    function obtenerComentarios($params = []){
        // si no viene una id por parametro
        if(empty($params)){
            $comentarios = $this->model->getcomentarios();
            if(!empty($comentarios)){
                return $this->view->response($comentarios,200);
            }else{
                return $this->view->response("comentarios not found",404);
            }
          }
          // si viene una id por parametro
            else {
                $comentario = $this->model->getComentario($params[":ID"]);
                if(!empty($comentario)) {
                    return $this->view->response($comentario,200);
                }else{
                    return $this->view->response("Comentario not found", 404);
                }
            }
    }

    public function agregarComentario($params = []) {
        // devuelve el objeto JSON enviado por POST     
         $body = $this->getData();
 
         // inserta comentario
         $comentario = $body->comentario;
         $nota = $body->nota;
         $deportista = $body->id_deportista;
         $username = $body->nombreUsuario;
         $comentario =$this->model->insertComentario($comentario, $nota, $deportista,$username);
         if($comentario){
            $this->view->response("el comentario fue insertado con exito", 200);
        }else{
            $this->view->response("El comentario no se pudo insertar", 404);
        }
    }

    public function borrarComentario($params = []) {
        $comentario_id = $params[':ID'];
        $comentario = $this->model->getComentario($comentario_id);

        if ($comentario) {
            $this->model->deleteComentario($comentario_id);
            $this->view->response("Comentario id=$comentario_id eliminada con éxito", 200);
        }
        else 
            $this->view->response("Comentario id=$comentario_id not found", 404);
}


}