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
    function insertUsuario($userName, $userPassword,$rol)
    {
        $query = $this->db->prepare('INSERT INTO usuarios (nombreUsuario, contrasenia,rol) VALUES (? , ?, ?)');
        $query->execute([$userName, $userPassword, $rol]);
    }
    function getUser($nombreUsuario)
    {
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE nombreUsuario = ?');
        $query->execute([$nombreUsuario]);
        $user = $query->fetch(PDO::FETCH_OBJ);
        return $user;
    }

    function getUsers(){
        $sentencia = $this->db->prepare('SELECT * FROM usuarios');
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);

    }

    function editPermiso($rol, $id){
        $sentencia = $this->db->prepare("UPDATE usuarios SET rol = ? WHERE id_usuarios= ?");
        $sentencia->execute(array($rol, $id));
    }
    function deleteUser($id){
        $sentencia = $this->db->prepare("DELETE FROM usuarios WHERE id_usuarios= ?");
        $sentencia->execute(array($id));
    }
}
