<?php

$view;
$model;

class usuarioController{
    function __construct()
    {
        $this->model= new usuarioModel();
        $this->view = new usuarioView();
    }


    function showLogin(){
        $this->view->showLogin();
    }

    function showInit(){
        $this->view->showInicio();
    }

    function showRegister(){
        $this->view->showRegister();
    }

    function confirmLogin(){
        //aca seria verificar si el usuario coincide con el de la base de datos y iniciar la session y mandarlo a la pagina principal
        if(!empty($_POST['username'])&& !empty($_POST['password'])){
            $userName=$_POST['username'];
            $userPassword=$_POST['password'];
        }

        $user= $this->model->getUser($userName);
        if($user && password_verify($userPassword,($user->contrasenia))){
            //aca mostraria el home
            session_start();
            $_SESSION['username']=$userName;
            header("Location: ".BASE_URL."home");

        }else{
            //aca tendria que poner bien si no se puede loguear
            $this->view->showLogin("Contrasenia y/o nombre de usuario incorrecto");
        }
        }

    function confirmRegister(){
        //aca seria insertar el usuario a la tabla y mandarlo al login
        if(!empty($_POST['username'])&& !empty($_POST['password'])&& !empty($_POST['verifypassword'])){
            $userName=$_POST['username'];
            $userPassword=password_hash($_POST['password'], PASSWORD_BCRYPT);
            $verifyUserPassword=password_hash($_POST['verifypassword'], PASSWORD_BCRYPT);
            //$userAdmin=1;

            $usuarioRepetido= $this->model->getUser($userName);
            if (password_verify($userPassword, $verifyUserPassword)){
                if(empty($usuarioRepetido)){
                    $this->model->insertUsuario($userName, $userPassword);
                    header("Location: ".BASE_URL."login");
                }else{
                    $this->view->showRegister("nombre de usuario no disponible");
                }
        }else{
            
            $this->view->showRegister('Las contrasenias no coinciden');
        }
        }
    }
    function logOut(){
        session_start();
        session_destroy();
        header("Location: ".BASE_URL."inicio");
    }
}