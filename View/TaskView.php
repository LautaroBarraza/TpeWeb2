<?php

class TaskView{

function __construct(){

}

function showDeportistas($deportistas, $esAdmin){
 
    $arrayDeportista = array();
    foreach($deportistas as $deportista){
        array_push($arrayDeportista, $deportista);
    }
    $smarty = new Smarty();
    $smarty->assign('titulo', "deportista");
    $smarty->assign('deportistas', $arrayDeportista);
    $smarty->assign('rango', $esAdmin);
    $smarty->display('templates/deportistas.tpl');

    
    
        
}


function showUnDeportista($deportista){
    $smarty = new Smarty();
    $smarty->assign('titulo',$deportista->nombre);
    $smarty->assign('deportista', $deportista);
    $smarty->display('templates/deportista.tpl');
}

function showUnDeporte($deporte){
    $arrayDeporte = array();
    foreach($deporte as $deportistas){
        array_push($arrayDeporte, $deportistas);
    }
    $smarty = new Smarty();
    $smarty->assign('titulo', $arrayDeporte[0]->deporte);
    $smarty->assign('deportistas', $arrayDeporte);
    $smarty->display('templates/deporte.tpl');

}

}