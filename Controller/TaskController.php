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
        $deportes = $this->model->getDeportes();
        $esAdmin= $this->authHelper->checkLogin();
        
        //si se logueo lo saludo y sino le muestro para que se logue
        $userName=null;
        if($esAdmin){
           $userName= $this->authHelper->getUserName();
        }
        $this->view->showDeportistas($deportistas, $esAdmin, $deportes, $userName);
    }

    function showDeportista($deportista){
        $deportista = $this->model->getDeportista($deportista);
        $this->view->showUnDeportista($deportista);
    }

    function showDeporte($deporte){
        $deporte = $this->model->getDeporte($deporte);
        $this->view->showUnDeporte($deporte);
    }

    function createDeportista(){
        $this->model->insertDeportista($_POST['nombre'], $_POST['apellido'], $_POST['edad'], $_POST['deporte']);
        header("Location: ".BASE_URL."home");
    }

    function createDeporte(){
        $this->model->insertDeporte($_POST['deporte']);
        header("Location: ".BASE_URL."home");
    }

    function borrarDeportista($id_Deportista){
        $this->model->deleteDeportista($id_Deportista);
        $this->showHome();
    }

    function borrarDeporte(){
        $this->model->deleteDeporte($_POST['deporte']);
        $this->showHome();
    }

}