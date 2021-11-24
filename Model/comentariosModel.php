<?php

class comentariosModel
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

    function getComentarios()
    {
        $sentencia = $this->db->prepare("select * from comentarios");
        $sentencia->execute();
        $comentarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $comentarios;
    }

    function getComentario($id)
    {
        $sentencia = $this->db->prepare("SELECT * FROM comentarios  WHERE id_comentario=?");
        $sentencia->execute(array($id));
        $comentario = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $comentario;
    }

    function insertComentario($comentario,$nota, $deportista)
    {
        $sentencia = $this->db->prepare("INSERT INTO comentarios(comentario,nota, id_deportista) VALUES(?,?,?)");
        $sentencia->execute(array($comentario,$nota, $deportista));
        return $this->db->lastInsertId();
    }

    function deleteComentario($id_comentario)
    {
        $sentencia = $this->db->prepare(
            "delete from comentarios where id_comentario=?"
        );
        $sentencia->execute(array($id_comentario));
    }

}