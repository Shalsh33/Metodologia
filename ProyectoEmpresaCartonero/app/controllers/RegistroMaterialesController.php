<?php
include_once("app/models/RegistroMaterialesModels.php");
include_once("app/views/MaterialesView.php");
include_once("app/views/RegistroMaterialesView.php");
include_once("aplicación/modelos/MaterialModel.php");

class RegistroMaterialesController {

    private $RegistroMaterialesView;
    private $RegistroMaterialesModel;
    private $MaterialesAceptadosModel;

    function __construct() {
        //////////////////////////////////
        $this->MaterialesAceptadosModel = new MaterialModel();
        $this-> RegistroMaterialesView = new MaterialesView();
        $this-> RegistroMaterialesModel = new RegistroMaterialesModel();
    }

    function showFormRegistroMat(){
        $materiales = $this->MaterialesAceptadosModel->obtenerMateriales();
        $this->RegistroMaterialesView->registro_de_materiales($materiales);
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