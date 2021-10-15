<?php

class RetirosModel{

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

    function postearRetiro($nombre, $apellido, $direccion, $telefono, $franja_horaria, $categoria){
        $query = $this->db->prepare('INSERT INTO retiros_cartonero(nombre, apellido, direccion, telefono, franja_horaria, categoria) VALUES (?,?,?,?,?,?)');
        $query ->execute([$nombre, $apellido, $direccion, $telefono, $franja_horaria, $categoria])
        
    }


}