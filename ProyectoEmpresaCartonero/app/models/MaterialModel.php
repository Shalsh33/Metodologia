<?php

class MaterialModel{

    private $db;

    function __construct() {
        // 1. Abro la conexión
        $this->db = $this->connect();
    }

    private function connect(){
        // 2. Conexion con la base
        //$db = new PDO('mysql:host=localhost;'.'dbname=db_reci_coop;charset=utf8', 'root', '');
        $db = new PDO('mysql:host=localhost;'.'dbname=db_reci_coop;charset=utf8', 'noelia', '');
        return $db;
    }

    /**
     * Registra un nuevo material
     */
    private funcion agregarMaterial($nombre, $descripcion, $es_aceptado){
        
        $query = $this->db->prepare('
        INSERT INTO materiales (nombre, descripcion, es_aceptado )
                VALUES ( ? , ? , ?)');

        $query->execute([$nombre, $descripcion, $es_aceptado]);
       
        return $this->db->lastInsertId();
    }

    /**
     * Actualiza los datos de un material
    */
    private function actualizarMaterial($nombre, $descripcion, $es_aceptado, $id){
        
        $query = $this->db->prepare('
        UPDATE materiales SET nombre = ?, descripcion = ?, es_aceptado = ? 
            WHERE id = ?');
        $query->execute([$nombre, $descripcion, $es_aceptado, $id]);
    }

    /**
     * Eliminar un material según id pasado como parámetro 
    */
    function eliminarMaterial($id)
    {
        $query = $this->db->prepare('
        DELETE FROM materiales where id_material = ?');
        $query->execute([$id]);
        // devuelve numero de columnas afectadas a la eliminacion
        return $query->rowCount();
    }
    
    /**
     * Verifica que el material este registrado y no haya sido modificado el parametro
    */
    function existeMaterial($id){

        $query = $this->db->prepare('SELECT id_material FROM materiales where id = ? MIMIT 1');
        $query->execute([$id]);

        // Obtengo la respuesta con un fetchAll 
        $numeroDeFilas = $query->rowCount();

        return $numeroDeFilas;
    }
    
}