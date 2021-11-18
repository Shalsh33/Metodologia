<?php
include_once("app/models/RegistroMaterialesModels.php");
include_once("app/views/MaterialesView.php");
include_once("app/models/MaterialModel.php");

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
        $this->RegistroMaterialesView->registro_de_materiales('postRegistroMat',$materiales);
    }

    function postRegistroMat(){
        
        //obtengo los datos del retiro
        $materiales = $_POST['material'];
        $peso = $_POST['cantidad'];
        $cartonero = $_POST['cartonero'];
        
        //mandamos los datos a el modelo
        for($i=0;$i<count($materiales);$i++){
            $this->RegistroMaterialesModel->postearRegistroMat($materiales[$i], $peso[$i], $cartonero);
        }
        
       header('Location: '. 'showFormRegistroMat');

    }

}