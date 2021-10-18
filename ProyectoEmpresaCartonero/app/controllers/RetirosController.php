<?php
include_once("app/models/RetirosModels.php");
include_once("app/views/UserView.php");

class RetirosController {

    private $RetirosView;
    private $RetirosModel;

    function __construct() {
        //////////////////////////////////
        $this-> RetirosView = new UserView();
        $this-> RetirosModel = new RetirosModel();
    }

    function showForm(){
        $this->RetirosView->showFormRetiro("postRetiro");
    }

    function postRetiro(){
        
        //obtengo los datos del retiro
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $franja_horaria = $_POST['franja_horaria'];
        $categoria = $_POST['categoria'];
        
        if (empty($nombre) || empty($apellido) || empty($direccion) || empty($telefono) || empty($franja_horaria) || empty($categoria)){

            header("Location: " . BASE_URL . "showFormRetiro");
            
            die();
        }
        
        //mandamos los datos a el modelo
        $this->RetirosModel->postearRetiro($nombre, $apellido, $direccion, $telefono, $franja_horaria, $categoria);
        header("Location: " . BASE_URL . "showFormRetiro"); //diseñar el home

    }

}











