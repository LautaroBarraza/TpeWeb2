<?php

class TaskView{

function __construct(){

}

function showTasks($deportistas){
 
    $arrayDeportista = array();
    foreach($deportistas as $deportista){
        array_push($arrayDeportista, $deportista);
    }
    $smarty = new Smarty();
    $smarty->assign('titulo', "deportista");
    $smarty->assign('deportistas', $arrayDeportista);
    $smarty->display('templates/deportistas.tpl');

    
    
        
}


function showUnDeportista($deportista){
    $smarty = new Smarty();
    $smarty->assign('titulo',$deportista->nombre);
    $smarty->assign('deportista', $deportista);
    $smarty->display('templates/deportista.tpl');
}
}