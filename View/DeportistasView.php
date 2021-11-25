<?php

class DeportistasView
{

    function __construct()
    {
    }

    function showDeportistas($deportistas, $estalogeado, $deportes, $userName = null, $rol)
    {

        $arrayDeportista = array();
        foreach ($deportistas as $deportista) {
            array_push($arrayDeportista, $deportista);
        }
        $smarty = new Smarty();
        $smarty->assign('titulo', "deportista");
        $smarty->assign('deportistas', $arrayDeportista);
        $smarty->assign('deportes', $deportes);
        $smarty->assign('nombreUsuario', $userName);
        $smarty->assign('logeado', $estalogeado);
        $smarty->assign('rol', $rol);
        $smarty->display('templates/deportistas.tpl');
    }


    function showUnDeportista($deportista, $estalogeado, $rol,$nombreUsuario)
    {
        $smarty = new Smarty();
        $smarty->assign('titulo', $deportista->nombre);
        $smarty->assign('deportista', $deportista);
        $smarty->assign('logeado', $estalogeado);
        $smarty->assign('rol', $rol);
        $smarty->assign('nombreUsuario', $nombreUsuario);
        $smarty->display('templates/deportista.tpl');
    }

    function showUnDeporte($deporte, $estalogeado)
    {

        $arrayDeporte = array();
        foreach ($deporte as $deportistas) {
            array_push($arrayDeporte, $deportistas);
        }
        //si no hay deportistas muestra un error, y si hay los muestra
        if (isset($arrayDeporte[0]->deporte)) {
            $smarty = new Smarty();
            $smarty->assign('titulo', $arrayDeporte[0]->deporte);
            $smarty->assign('deportistas', $arrayDeporte);
            $smarty->assign('logeado', $estalogeado);
            $smarty->display('templates/deporte.tpl');
        } else {
            $this->showError("Actualmente no se encuentran deportistas para el deporte solicitado", $estalogeado);
        }
    }

    function showError($error, $estalogeado){
        $smarty = new Smarty();
        $smarty->assign('error', $error);
        $smarty->assign('logeado', $estalogeado);
        $smarty->display('templates/error.tpl');
    }
}
