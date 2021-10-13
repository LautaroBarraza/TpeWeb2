<?php
include_once './Controller/TaskController.php';
include_once './Model/TaskModel.php';
include_once './View/TaskView.php';
require_once('./smarty-master/libs/Smarty.class.php');
require_once './Controller/usuarioController.php';
require_once './Model/usuarioModel.php';
require_once './View/usuarioView.php';
require_once './helpers/Authhelper.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'inicio';
}

$params = explode("/", $action);

$controller = new TaskController();
$sessionController = new usuarioController();

switch ($params[0]) {

    case 'home':
        $controller->showHome();
        break;
    case 'inicio':
        $sessionController->showInit();
        break;
    case 'Deportistas':
        $controller->showDeportista($params[1]);
        break;
    case 'Deporte':
        $controller->showDeporte($params[1]);
        break;
    case 'login':
        $sessionController->showLogin();
        break;
    case 'register':
        $sessionController->showRegister();
        break;
    case 'confirmLogin':
        $sessionController->confirmLogin();
        break;
    case 'confirmRegister':
        $sessionController->confirmRegister();
        break;
    case 'logOut':
        $sessionController->logOut();
        break;
    case 'insertDeportista':
        $controller->createDeportista();
    break;
    case 'insertDeporte':
        $controller->createDeporte();
    break;
    case 'deleteDeportista':
        $controller->borrarDeportista($params[1]);
        break;
    case 'deleteDeporte':
        $controller->borrarDeporte();
        break;
    
    default:
    echo "mal";
    break;

    default:
        echo "mal";
        break;
}
