<?php

class usuarioView{

    function __construct(){

    }

    function showInicio(){
    $smarty = new Smarty();
    $smarty->display('templates/formBienvenido.tpl');
    }

    function showLogin(){
        echo "aca me logearia";
    }

    function showRegister(){
        echo 'aca me registraria';
    }


}