<?php
include_once './Controller/TaskController.php';
include_once './Model/TaskModel.php';
include_once './View/TaskView.php';
require_once('./smarty-master/libs/Smarty.class.php');
require_once './Controller/usuarioController.php';
require_once './Model/usuarioModel.php';
require_once './View/usuarioView.php';

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}else{
    $action ='home';
};
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
$params = explode("/", $action);

$controller = new TaskController();
$sessionController = new usuarioController();

switch($params[0]){

    case 'home':
        $sessionController->showInit();
    break;
    case 'Deportistas':
        $controller->showDeportista($params[1]);
        break;
    case 'Deporte' :
        $controller->showDeporte($params[1]);
        break;
    case 'login' :
        $sessionController->confirmLogin();
        break;
    case 'register' :
        $sessionController->confirmRegister();
        break;
    

    /*case 'insert':
        $controller->createTask();
    break;
    case 'deleteTask':
        $controller->borrarTarea($params[1]);
    break;
    */
    default:
    echo "mal";
    break;

}