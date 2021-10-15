<?php

include_once 'models/RetirosModel.php';
include_once 'views/RetirosView.php';

class RetirosController {

    private $RetirosView;
    private $RetirosModel;

    function __construct() {
        //////////////////////////////////
        $this-> RetirosView = ?;
        $this-> RetirosModel = new RetirosModel();
    }

    function showForm(){
        $this->RetirosView->showFormRetiro();
    }

    function postRetiro(){
        //obtengo los datos del retiro
        $nombre = $_POST['nombre']
        $apellido = $_POST['apellido']
        $direccion = $_POST['direccion']
        $franja_horaria = $_POST['franja_horaria']
        $categoria = $_POST['categoria']
        
        //mandamos los datos a el modelo
        $this->RetirosModel->postearRetiro($nombre, $apellido, $direccion, $telefono, $franja_horaria, $categoria);
        header("Location: " . BASE_URL . "home"); //diseñar el home
    }

}











