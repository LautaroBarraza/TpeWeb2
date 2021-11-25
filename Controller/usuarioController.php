<?php

$view;
$model;
$authHelper;

class usuarioController
{
    function __construct()
    {
        $this->model = new usuarioModel();
        $this->view = new usuarioView();
        $this->authHelper = new AuthHelper();
    }


    function showLogin()
    {
        $this->view->showLogin();
    }

    function showInit()
    {
        $this->view->showInicio();
    }

    function showRegister()
    {
        $this->view->showRegister();
    }

    function confirmLogin()
    {
        //aca seria verificar si el usuario coincide con el de la base de datos y iniciar la session y mandarlo a la pagina principal
        if (!empty($_POST['username']) && !empty($_POST['password'])) {
            $userName = $_POST['username'];
            $userPassword = $_POST['password'];
        }
        $user = $this->model->getUser($userName);
        if ($user && $user->contrasenia) {
            //aca mostraria el home
            session_start();
            $_SESSION['username'] = $userName;
            $_SESSION['rol']= $user->rol;
            $this->authHelper->showBaseHome();
        } else {
            //aca tendria que poner bien si no se puede loguear
            $this->view->showLogin("Contrasenia y/o nombre de usuario incorrecto");
        }
    }

    function confirmRegister()
    {
        //aca seria insertar el usuario a la tabla y mandarlo al login
        if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['verifypassword'])) {
            $userName = $_POST['username'];
            $userPassword = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $verifyUserPassword = $_POST['verifypassword'];
            //$userAdmin=1;
            $usuarioRepetido = $this->model->getUser($userName);
            if (password_verify($verifyUserPassword, $userPassword)) {
                if (empty($usuarioRepetido)) {
                    $rol=0;
                    $this->model->insertUsuario($userName, $userPassword, $rol);
                    header("Location: " . BASE_URL . "login");
                } else {
                    $this->view->showRegister("nombre de usuario no disponible");
                }
            } else {

                $this->view->showRegister('Las contrasenias no coinciden');
            }
        }
    }

    function logOut()
    {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL . "inicio");
    }

    function tableUsers(){
        $rol = $this->authHelper->esAdmin();
        $users= $this->model->getUsers();
        $estaLogeado = $this->authHelper->checkLogin();
        $this->view->showUsers($users, $rol,$estaLogeado);
    }

    function quitarPermisos($id){
        $rol = 0;
        $this->model->editPermiso($rol, $id);
        header("Location: " . BASE_URL . "showUsers");
    }

    function darPermisos($id){
        $rol = 1;
        $this->model->editPermiso($rol, $id);
        header("Location: " . BASE_URL . "showUsers");
    }

    function deleteUser($id){
        $this->model->deleteUser($id);
        header("Location: " . BASE_URL . "showUsers");
    }
}


