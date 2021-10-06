<?php

$view;
$model;

class usuarioController{
    function __construct()
    {
        $this->model= new usuarioModel();
        $this->view = new usuarioView();
    }


    function confirmLogin(){
        $this->view->showLogin();
    }

    function showInit(){
        $this->view->showInicio();
    }

    function confirmRegister(){
        $this->view->showRegister();
    }
}