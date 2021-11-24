<?php

$model;
$view;
$authHelper;

class DeportistasController
{
    function __construct()
    {
        $this->model = new DeportistasModel();
        $this->view = new DeportistasView();
        $this->authHelper = new AuthHelper();
    }


    function showHome()
    {
        $deportistas = $this->model->getDeportistasConDeporte();
        $deportes = $this->model->getDeportes();
        $estaLogeado = $this->authHelper->checkLogin();
        $rol= $this->authHelper->esAdmin();

        //si se logueo lo saludo y sino le muestro para que se logue
        $userName = null;
        if ($estaLogeado) {
            $userName = $this->authHelper->getUserName();
        }
        $this->view->showDeportistas($deportistas, $estaLogeado, $deportes, $userName, $rol);
    }

    function showDeportista($deportista)
    {
        $estaLogeado = $this->authHelper->checkLogin();
        if ($estaLogeado) {
            $nombreUsuario = $this->authHelper->getUserName();
        }
        $rol= $this->authHelper->esAdmin();
        $deportista = $this->model->getDeportista($deportista);
        $this->view->showUnDeportista($deportista, $estaLogeado, $rol,$nombreUsuario);
    }

    function showDeporte($deporte)
    {
        $deporte = $this->model->getDeporte($deporte);
        $this->view->showUnDeporte($deporte);
    }

    function createDeportista()
    {
        if(isset($_POST["nombre"], $_POST['apellido'], $_POST['edad'], $_POST['deporte'])){
        $this->model->insertDeportista($_POST['nombre'], $_POST['apellido'], $_POST['edad'], $_POST['deporte']);
        $this->authHelper->showBaseHome();
        } else {
            $this->view->showError("Faltan completar campos");
        }
    }

    function createDeporte()
    {
        if(isset($_POST['deporte'])){
        $this->model->insertDeporte($_POST['deporte']);
        $this->authHelper->showBaseHome();
        } else {
            $this->view->showError("Faltan completar campos"); 
        }
    }

    function borrarDeportista($id_Deportista)
    {
        if(isset($_POST['id_deportista'])){
        $this->model->deleteDeportista($id_Deportista);
        $this->authHelper->showBaseHome();
        } else {
            $this->view->showError("Faltan completar campos"); 
        }
    }

    function borrarDeporte()
    {
        if(isset($_POST['deporte'])){
        $this->model->deleteDeporte($_POST['deporte']);
        $this->authHelper->showBaseHome();
        } else {
            $this->view->showError("Faltan completar campos"); 
    }

    function editarDeporte()
    {
        if(isset($_POST['deporte'], $_POST['deporteEditado'])){
        $this->model->updateDeporte($_POST['deporte'], $_POST['deporteEditado']);
        $this->authHelper->showBaseHome();
        } else {
            $this->view->showError("Faltan completar campos");
        }

    }

    function editarDeportista()
    {
        if(isset($_POST['deportistaEdit'], $_POST['nombreEdit'], $_POST['apellidoEdit'], $_POST['edadEdit'], $_POST['deporteEdit'])){
        $this->model->updateDeportista($_POST['deportistaEdit'], $_POST['nombreEdit'], $_POST['apellidoEdit'], $_POST['edadEdit'], $_POST['deporteEdit']);
        $this->authHelper->showBaseHome();
        } else {
            $this->view->showError("Faltan completar campos");
        }
    }
}

}