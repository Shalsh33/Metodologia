<?php
include_once("app/models/RegistroMaterialesModels.php");
include_once("app/views/RegistroMaterialesView.php");

class RegistroMaterialesController {

    private $RetirosView;
    private $RetirosModel;

    function __construct() {
        //////////////////////////////////
        $this-> RegistroMaterialesView = new MaterialesView();
        $this-> RegistroMaterialesModel = new RegistroMaterialesModel();
    }

    function showFormRegistroMat(){
        $this->RegistroMaterialesView->registro_de_materiales("postRegistroMat");
    }

    function postRegistroMat(){
        
        //obtengo los datos del retiro
        $tipo = $_POST['tipo'];
        $peso = $_POST['peso'];
        $cartonero = $_POST['cartonero'];
        
        if (empty($tipo) || empty($peso)){

            $this->view->showError('Faltaron datos obligatorios');
            
            die();
        }

        if (empty($cartonero)){
            $cartonero= 'cooperativa';
        }
        
        //mandamos los datos a el modelo
        $this->RetirosModel->postearRegistroMat($tipo, $peso, $cartonero);
        header("Location: " . BASE_URL . "showFormRegistroMat");

    }

}