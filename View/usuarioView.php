<?php

class usuarioView{

    function __construct(){

    }

    function showInicio(){
    $smarty = new Smarty();
    $smarty->display('templates/forms/formBienvenido.tpl');
    }

    function showLogin($error =''){
        $smarty = new Smarty();
        $smarty->assign('error', $error);
        $smarty->display('templates/forms/formLogin.tpl');
    }

    function showRegister($error =''){
        $smarty = new Smarty();
        $smarty->assign('error', $error);
        $smarty->display('templates/forms/formRegister.tpl');
    }

    function showUsers($users, $rol, $logeado){
        if(isset($users)){
            $smarty = new Smarty();
            $smarty->assign('titulo', "Usuarios");
            $smarty->assign('usuarios', $users);
            $smarty->assign('rol', $rol);
            $smarty->assign('logeado',$logeado);
            $smarty->display('templates/usuarios.tpl');
        }
    }

}