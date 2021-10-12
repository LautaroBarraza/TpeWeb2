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

}