<?php


class DeportistasModel
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

    function getDeportistas()
    {
        $sentencia = $this->db->prepare("select * from deportistas");
        $sentencia->execute();
        $deportistas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $deportistas;
    }

    function getDeportista($id)
    {
        $sentencia = $this->db->prepare("SELECT deportistas.*, deporte.deporte as deporte FROM deportistas JOIN deporte ON deportistas.id_deporte = deporte.id_deporte WHERE id_deportista=?");
        $sentencia->execute(array($id));
        $deportista = $sentencia->fetch(PDO::FETCH_OBJ);
        return $deportista;
    }

    function getDeporte($deporte)
    {
        $sentencia = $this->db->prepare("SELECT deportistas.*, deporte.deporte as deporte FROM deportistas JOIN deporte ON deportistas.id_deporte = deporte.id_deporte WHERE deporte=?");
        $sentencia->execute(array($deporte));
        $deporte = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $deporte;
    }

    function getDeportes()
    {
        $sentencia = $this->db->prepare("select * from deporte");
        $sentencia->execute();
        $deporte = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $deporte;
    }

    function getDeportistasConDeporte()
    {
        $query = $this->db->prepare(
            "SELECT deportistas.*, deporte.deporte as deporte FROM deportistas JOIN deporte ON deportistas.id_deporte = deporte.id_deporte"
        );
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function insertDeportista($nombre, $apellido, $edad, $id_deporte)
    {
        $sentencia = $this->db->prepare("INSERT INTO deportistas(nombre, apellido, edad, id_deporte) VALUES(?,?,?,?)");
        $sentencia->execute(array($nombre, $apellido, $edad, $id_deporte));
    }

    function insertDeporte($deporte)
    {
        $sentencia = $this->db->prepare("INSERT INTO deporte(deporte) VALUES(?)");
        $sentencia->execute(array($deporte));
    }

    function deleteDeportista($id_deportista)
    {
        $sentencia = $this->db->prepare(
            "delete from deportistas where id_deportista=?"
        );
        $sentencia->execute(array($id_deportista));
    }

    function deleteDeporte($id_deporte)
    {
        $sentencia = $this->db->prepare(
            "delete from deporte where id_deporte=?"
        );
        $sentencia->execute(array($id_deporte));
    }

    function updateDeporte($deporte, $deporteEditado)
    {
        $sentencia = $this->db->prepare("update deporte set deporte='$deporteEditado' where deporte.id_deporte=?");
        $sentencia->execute(array($deporte));
    }

    function updateDeportista($id_deportista, $nombre, $apellido, $edad, $id_deporte)
    {
        $sentencia = $this->db->prepare("update deportistas set nombre='$nombre', apellido='$apellido',edad='$edad',id_deporte='$id_deporte' where deportistas.id_deportista=?");
        $sentencia->execute(array($id_deportista));
    }
}