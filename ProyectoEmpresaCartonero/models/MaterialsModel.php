<?php

class MaterialsModel{

    private $db;

    function __construct() {
        // 1. Abro la conexión
        $this->db = $this->connect();
    }

    private function connect(){
        // 2. Conexion con la base
        $db = new PDO('mysql:host=localhost;'.'dbname=db_reci_coop;charset=utf8', 'root', '');
        return $db;
    }

    /** obtiene un listado de materiales aceptados para el reciclado de los mismos **/
    function obtenerMateriales(){
        $query = $this->db->prepare('SELECT * FROM materiales WHERE condicion='aceptados'');
        $query ->execute();
        
    }


}