<?php


class usuarioModel
{

    private $db;

    function __construct()
    {
        $this->db = new PDO(
            'mysql:host=localhost;'
                . 'dbname=deporte;charset=utf8',
            'root',
            ''
        );
    }

    function insertUsuario($userName, $userPassword)
    {
        $query = $this->db->prepare('INSERT INTO usuarios (nombreUsuario, contrasenia) VALUES (? , ?)');
        $query->execute([$userName, $userPassword]);
    }

    function getUser($nombreUsuario)
    {
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE nombreUsuario = ?');
        $query->execute([$nombreUsuario]);
        $user = $query->fetch(PDO::FETCH_OBJ);
        return $user;
    }
}
