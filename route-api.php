<?php

include_once "./libs/Router.php";
include_once "./Controller/apiController.php";
include_once './Controller/DeportistasController.php';
include_once './Model/DeportistasModel.php';
include_once './View/DeportistasView.php';
require_once('./smarty-master/libs/Smarty.class.php');
require_once './Controller/usuarioController.php';
require_once './Model/usuarioModel.php';
require_once './View/usuarioView.php';
require_once './helpers/Authhelper.php';
require_once './Controller/apiComentarioController.php';
require_once './Model/comentariosModel.php';


$router = new Router();


//api comentarios
$router->addRoute('comentarios', 'GET', 'apiComentarioController', 'obtenerComentarios');
$router->addRoute('comentarios/:ID', 'GET', 'apiComentarioController', 'obtenerComentarios');

$router->addRoute('comentarios', 'POST', 'apiComentarioController', 'agregarComentario');
$router->addRoute('comentarios/:ID', 'DELETE', 'apiComentarioController', 'borrarComentario');
$router->addRoute('comentarios/:ID', 'PUT', 'apiComentarioController', 'actualizarComentario');


// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);



