<?php

include_once("app/models/Model.php");

class RegistroMaterialesModel extends Model{

    

    function postearRegistroMat($tipo, $peso, $cartonero){
        $query = $this->db->prepare('INSERT INTO registro_materiales(tipo, peso, cartonero) VALUES (?,?,?)');
        $query ->execute([$tipo, $peso, $cartonero]);
    }



}