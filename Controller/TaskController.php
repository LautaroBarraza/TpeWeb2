<?php

$model;
$view;
$authHelper;
class TaskController{
    function __construct(){
        $this->model= new TaskModel();
        $this->view = new TaskView();
        $this->authHelper = new AuthHelper();
    }


    function showHome(){
        $deportistas= $this->model->getDeportistasConDeporte();
        $esAdmin= $this->authHelper->checkLogin();
        $this->view->showDeportistas($deportistas, $esAdmin);
    }

    function showDeportista($deportista){
        $deportista = $this->model->getDeportista($deportista);
        $this->view->showUnDeportista($deportista);
    }

    function showDeporte($deporte){
        $deporte = $this->model->getDeporte($deporte);
        $this->view->showUnDeporte($deporte);
    }
    
    
    
    
    /*function createUsuario(){
        $this->model->insertUsuario($_POST['nombreUsuario'], $_POST['contrasenia']);
        header("Location: ".BASE_URL."home");
    
    
    }
    function borrarUsuario($id_usuario){
        $this->model->deleteUsuario($id_usuario);
        header("Location: ".BASE_URL."home");
    
    }
*/

}