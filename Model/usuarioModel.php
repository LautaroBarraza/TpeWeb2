<?php


class usuarioModel{

    private $db;

    function __construct(){
            $this->db = new PDO('mysql:host=localhost;'
            .'dbname=deporte;charset=utf8'
            , 'root', '');

    }


}