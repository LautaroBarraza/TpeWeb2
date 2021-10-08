<?php

$view;
$model;

class usuarioController{
    function __construct()
    {
        $this->model= new usuarioModel();
        $this->view = new usuarioView();
    }


    function showLogin(){
        $this->view->showLogin();
    }

    function showInit(){
        $this->view->showInicio();
    }

    function showRegister(){
        $this->view->showRegister();
    }

    function confirmLogin(){
        //aca seria verificar si el usuario coincide con el de la base de datos y iniciar la session y mandarlo a la pagina principal
    }

    function confirmRegister(){
        //aca seria insertar el usuario a la tabla y mandarlo al login
    }
}