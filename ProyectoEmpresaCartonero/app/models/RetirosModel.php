<?php

class RetirosModel extends Model{

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