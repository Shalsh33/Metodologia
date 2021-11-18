<?php

class RegistroMaterialesModel{

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

    function postearRegistroMat($tipo, $peso, $cartonero){
        $query = $this->db->prepare('INSERT INTO registro_materiales(tipo, peso, cartonero) VALUES (?,?,?)');
        $query ->execute([$tipo, $peso, $cartonero]);
    }



}