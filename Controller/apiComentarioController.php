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
        if(empty($params)){
            $comentarios = $this->model->getcomentarios();
            return $this->view->response($comentarios,200);
          }
            else {
                $comentario = $this->model->getComentario($params[":ID"]);
                if(!empty($comentario)) {
                    return $this->view->response($comentario,200);
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
         $this->model->insertComentario($comentario, $nota, $deportista);
    }

    public function actualizarComentario($params = []) {
        $comentario_id = $params[':ID'];
        $comentario = $this->model->getDeportista($comentario_id);

        if ($comentario) {
            $body = $this->getData();
            $comentario = $body->comentario;
            $nota = $body->nota;
            $deportista = $body->id_deportista;
            $this->model->updateComentario($comentario,$nota, $deportista);
            $this->view->response("Tarea id=$comentario_id actualizada con éxito", 200);
        }
        else 
            $this->view->response("Task id=$comentario_id not found", 404);
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