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
        $rol= $this->authHelper->esAdmin();
        $deportista = $this->model->getDeportista($deportista);
        $this->view->showUnDeportista($deportista, $estaLogeado, $rol);
    }

    function showDeporte($deporte)
    {
        $deporte = $this->model->getDeporte($deporte);
        $this->view->showUnDeporte($deporte);
    }

    function createDeportista()
    {
        $this->model->insertDeportista($_POST['nombre'], $_POST['apellido'], $_POST['edad'], $_POST['deporte']);
        $this->authHelper->showBaseHome();
    }

    function createDeporte()
    {
        $this->model->insertDeporte($_POST['deporte']);
        $this->authHelper->showBaseHome();
    }

    function borrarDeportista($id_Deportista)
    {
        $this->model->deleteDeportista($id_Deportista);
        $this->authHelper->showBaseHome();
    }

    function borrarDeporte()
    {
        $this->model->deleteDeporte($_POST['deporte']);
        $this->authHelper->showBaseHome();
    }
    function editarDeporte()
    {
        $this->model->updateDeporte($_POST['deporte'], $_POST['deporteEditado']);
        $this->authHelper->showBaseHome();
    }

    function editarDeportista()
    {
        $this->model->updateDeportista($_POST['deportistaEdit'], $_POST['nombreEdit'], $_POST['apellidoEdit'], $_POST['edadEdit'], $_POST['deporteEdit']);
        $this->authHelper->showBaseHome();
    }
}
