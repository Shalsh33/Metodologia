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

        $query = $this->db->prepare('INSERT INTO retiros_cartonero(nombre, apellido, direccion, telefono, franja_horaria, categoria, fecha_creacion) VALUES (?,?,?,?,?,?,?)');
        $date = date("Y-m-d");
        $query ->execute([$nombre, $apellido, $direccion, $telefono, $franja_horaria, $categoria, $date]);

    }


    function getRetiros($dateselected = null){

        if (empty($dateselected)){
            $query = $this->db->prepare('SELECT * FROM retiros_cartonero');
            $query->execute();
            $retiros = $query->fetchAll(PDO::FETCH_OBJ);
            return $retiros;
        }else{
            $query = $this->db->prepare('SELECT * FROM retiros_cartonero WHERE fecha_creacion = ?');
            $query->execute([$dateselected]);
            $retiros = $query->fetchAll(PDO::FETCH_OBJ); 
            return $retiros;
        }
        

        
    }



}