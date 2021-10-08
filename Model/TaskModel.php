<?php


class TaskModel{

    private $db;

    function __construct(){
            $this->db = new PDO('mysql:host=localhost;'
            .'dbname=deporte;charset=utf8'
            , 'root', '');

    }

    function getDeportistas(){
        $sentencia = $this->db->prepare( "select * from deportistas");
        $sentencia->execute();
        $deportistas= $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $deportistas;
    
    }

    function getDeportista($id){
        $sentencia = $this->db->prepare( 
            "SELECT deportistas.*, deporte.deporte as deporte FROM deportistas JOIN deporte ON deportistas.id_deporte = deporte.id_deporte WHERE id_deportista=?");
        $sentencia->execute(array($id));
        $deportista= $sentencia->fetch(PDO::FETCH_OBJ);
        return $deportista;
    
    }

    function getDeporte($deporte){
        $sentencia = $this->db->prepare("SELECT deportistas.*, deporte.deporte as deporte FROM deportistas JOIN deporte ON deportistas.id_deporte = deporte.id_deporte WHERE deporte=?");
        $sentencia->execute(array($deporte));
        $deporte= $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $deporte;
    }

    function getDeportistasConDeporte() {
        $query = $this->db->prepare(
            "SELECT deportistas.*, deporte.deporte as deporte FROM deportistas JOIN deporte ON deportistas.id_deporte = deporte.id_deporte");
        $query->execute();
    
        return $query->fetchAll(PDO::FETCH_OBJ);
    }




    /*function inserUsuario($nombreUsuario, $contrasenia){
    
        $usuario = $this->db->prepare("INSERT INTO usuario(titulo, descripcion, prioridad, completada) VALUES(?,?,?,?)");
            $tarea->execute(array($titulo,$descripcion,$prioridad,$completada));
    
    
    
    }
    function deleteTask($id_tarea){
        $tarea = $this->db->prepare( 
            "delete from deportistas where id_task=?");
            
            
            $tarea->execute(array($id_tarea));
    }

    */


}