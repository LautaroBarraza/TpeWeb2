<?php

class usuarioView{

    function __construct(){

    }

    function showInicio(){
    $smarty = new Smarty();
    $smarty->display('templates/formBienvenido.tpl');
    }

    function showLogin($error =''){
        $smarty = new Smarty();
        $smarty->assign('error', $error);
        $smarty->display('templates/formLogin.tpl');
    }

    function showRegister($error =''){
        $smarty = new Smarty();
        $smarty->assign('error', $error);
        $smarty->display('templates/formRegister.tpl');
    }

}