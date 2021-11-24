<?php

// un helper para poder checkear que este logueado desde diferentes controllers

class AuthHelper{
    

    function __construct()
    {
        
    }

    function checkLogin(){

        session_start();
        if(!isset($_SESSION['username'])){
            return false;
        }else {
            return true;
        }

    }

    function getUserName(){
        return $_SESSION['username'];
    }
    function esAdmin(){
        if(isset($_SESSION["rol"]) && $_SESSION["rol"] == 1){
            return true;
        }else{
            return false;
        }
    }

    function showBaseHome(){
        header("Location: " . BASE_URL . "home");
    }

}