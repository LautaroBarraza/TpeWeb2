<?php
include_once './Controller/DeportistasController.php';
include_once './Model/DeportistasModel.php';
include_once './View/DeportistasView.php';
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

$controller = new DeportistasController();
$sessionController = new usuarioController();

switch ($params[0]) {

    //home
    case 'home':
        $controller->showHome();
        break;

    // inicio, login, register
    case 'inicio':
        $sessionController->showInit();
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

    //deportistas y deportes
    case 'Deportistas':
        $controller->showDeportista($params[1]);
        break;
    case 'Deporte':
        $controller->showDeporte($params[1]);
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
    case 'updateDeporte':
        $controller->editarDeporte();
        break;
    case 'updateDeportista':
        $controller->editarDeportista();
        break;

    //usuarios y administrador
    case 'showUsers':
        $sessionController->tableUsers();
        break;
    case 'quitarPermiso':
        $sessionController->quitarPermisos($params[1]);
        break;
    case 'darPermiso':
        $sessionController->darPermisos($params[1]);
        break;
    case 'deleteUsuario':
        $sessionController->deleteUser($params[1]);
        break;
    
    
    
    default:
        echo "Url no encontrada";
        break;
}
