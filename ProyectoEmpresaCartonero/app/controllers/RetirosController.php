<?php
include_once("app/models/RetirosModel.php");
include_once("app/views/UserView.php");
include_once("app/views/AdminView.php");

class RetirosController {

    private $RetirosView;
    private $RetirosModel;
    private $AdminView;

    function __construct() {
        //////////////////////////////////
        $this->RetirosView = new UserView();
        $this->RetirosModel = new RetirosModel();
        $this->AdminView = new AdminView();
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


    function showListRetiros(){

        if (empty($_GET['fechaselect'])){
            $retiros = $this->RetirosModel->getRetiros();
            $this->AdminView->showRetiros($retiros);
        }else{
            $retiros = $this->RetirosModel->getRetiros($_GET['fechaselect']);
            $this->AdminView->showRetiros($retiros);
        }

        

    }








}











