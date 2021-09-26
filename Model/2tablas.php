<?php
function connect(){
    $db = new PDO('mysql:host=localhost;'
    .'dbname=prueba;charset=utf8'
    , 'root', '');
    return $db;

}

function getProductosConCategoria() {
    $db = connect();
    $query = $db->prepare("SELECT tabla1.*, tabla2.nombre as categoria FROM tabla1 JOIN tabla2 ON tabla1.id_categoria = tabla2.id_tabla2");
    $query->execute();

    return $query->fetchAll(PDO::FETCH_OBJ);
}