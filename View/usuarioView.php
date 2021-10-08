<?php

class usuarioView{

    function __construct(){

    }

    function showInicio(){
    $smarty = new Smarty();
    $smarty->display('templates/formBienvenido.tpl');
    }

    function showLogin(){
        $smarty = new Smarty();
        $smarty->display('templates/formLogin.tpl');
    }

    function showRegister(){
        $smarty = new Smarty();
        $smarty->display('templates/formRegister.tpl');
    }


}