<?php

class MaterialModel extends Model{


    /**
     * Registra un nuevo material
     */
    function insertarMaterial($nombre, $descripcion, $es_aceptado){
        $aceptado = 1 ;

        if ($es_aceptado == 'N'){
            $aceptado = 0 ;
        }
        $query = $this->db->prepare('
        INSERT INTO materiales (nombre, descripcion, es_aceptado )
                VALUES ( ? , ? , ?)');

        $query->execute([$nombre, $descripcion, $aceptado]);
       
        return $this->db->lastInsertId();
    }

    /**
     * Actualiza los datos de un material
    */
    function actualizarMaterial($nombre, $descripcion, $es_aceptado, $id){
        
        $query = $this->db->prepare('
        UPDATE materiales SET nombre = ?, descripcion = ?, es_aceptado = ? 
            WHERE id_material = ?');
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

        $query = $this->db->prepare('
            SELECT id_material FROM materiales where id_material = ? MIMIT 1');
        $query->execute([$id]);

        // Obtengo la respuesta con un fetchAll 
        $numeroDeFilas = $query->rowCount();

        return $numeroDeFilas;
    }

    function obtenerMateriales() {

        // Se envia la consulta
        $query = $this->db->prepare('
        SELECT * FROM materiales
            order by id_material');
        $query->execute();

        // Obtengo la respuesta con un fetchAll 
        $materiales = $query->fetchAll(PDO::FETCH_OBJ);

        return $materiales;
    }

    function obtenerMaterial($id)
    {

        // Enviar la consulta 
        $query = $this->db->prepare('SELECT * FROM materiales where id_material = ?');
        $query->execute([$id]);

        // Obtengo la respuesta con un fetchAll 
        $material = $query->fetch(PDO::FETCH_OBJ);

        return $material;
    }
    
}