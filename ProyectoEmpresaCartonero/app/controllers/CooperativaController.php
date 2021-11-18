<?php

include_once 'app/Views/View.php';
include_once 'app/models/MaterialModel.php';
include_once 'app/models/RegistroMaterialesModels.php';
include_once 'app/models/RetirosModel.php';
class CooperativaController
{

    private $View;
    private $MaterialModel;
    private $RegistroMaterialesModel;
    private $RetirosModel;

    function __construct()
    {
       $this->View = new View();
       $this->MaterialModel = new MaterialModel();
       $this->RegistroMaterialesModel = new RegistroMaterialesModel();
       $this->RetirosModel = new RetirosModel();
    }

    /**
     * Imprime la lista de materiales que hay disponibles para el reciclado
     */
    function mostrarMateriales($mensaje='')
    {
        $materiales = $this->MaterialModel->obtenerMateriales();
        // actualizo la vista
        $this->View->listadoDeMateriales($materiales, $mensaje);
    }

   /**
     * Muestra el formulario de carga de materiales
     */
    function agregarMateriales($mensaje=''){

        $this->View->mostrarFormularioAlta($mensaje);
    }


    /**
     * Muestra el formulario de actualizacion de materiales
     */
    function actualizarMateriales($mensaje){

        $this->View->mostrarFormularioModificar($mensaje);
    }


    /**
     * Registra el material en el sistema
     */
    function agregarUnMaterial(){

        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $es_aceptado = $_POST['es_aceptado'];

        // verifico campos obligatorios
        if (empty($nombre) || empty($descripcion) || empty($es_aceptado)) {
            $mensaje = "Debe completar los datos requeridos para la carga de material.";
            $this->agregarMateriales($mensaje);
        }else{
            $id = $this->MaterialModel->insertarMaterial($nombre, $descripcion, $es_aceptado);
            if ($id) {
                $mensaje = "Se cargó el material de manera exitosa";
            } else {
                $mensaje = "No se pudo crear el material. Verifique los datos ingresados y vuelva a intentarlo.";
            }
            $this->mostrarMateriales($mensaje);
        } 
    }



    /**
     * Registra el material en el sistema
     */
    function actualizarUnMaterial(){

        // toma los datos a actualizar ingresados en el formulario
        $id = $_GET['id_material'];
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $es_aceptado = $_POST['es_aceptado'];

        // verifica que sea numerico y que exista
        if ((is_numeric($id)) && ($this->MaterialModel->existeMaterial($id)>0)){
            // verifico campos obligatorios
            if (empty($nombre) || empty($descripcion)|| empty($es_aceptado)) {
                $mensaje = "Debe completar los datos requeridos para la carga de material.";
                $this->mostrarMateriales($mensaje);
            }else{
                // si se verifico todo se actualiza el material
                $idAct = $this->MaterialModel->actualizarMaterial($nombre, $descripcion, $es_aceptado, $id);
                if ($idAct) {
                    $mensaje = "Se actualizó de manera exitosa";
                } else {
                    $mensaje = "No se pudo actualizar el material. Verifique los datos ingresados y vuelva a intentarlo.";
                }
                $this->mostrarMateriales($mensaje);
            } 
        }else{
            $mensaje = "No se pudo actualizar el material. Verifique los datos ingresados y vuelva a intentarlo.";
            $this->mostrarMateriales($mensaje);
        }
    }



    function editarMaterial($id)
    {
        $valido = true;

        if (is_numeric($id)) {
            $material = $this->MaterialModel->obtenerMaterial($id);
            if ($material) {
                $this->View->editarMaterialVista($material);
            } else {
                $valido = false;
                $mensaje = "No se pudieron recuperar los datos del material";
                $this->mostrarMateriales($mensaje);
            }
        } else {
                $valido = false;
                $mensaje = "No se pudieron recuperar los datos del material";
                $this->mostrarMateriales($mensaje);
            }
    }



        /**
     * Elimina el material registrado en el sistema
     */
    function eliminarMaterial($id)
    {
        if (is_numeric($id)) {
            $borrado = $this->MaterialModel->eliminarMaterial($id);
            if ($borrado) {
                $mensaje = "El material ha sido eliminado.";
            } else {
                $mensaje = "Ups!!! ... No se pudo borrar el material.";
            }
        } else {
            $mensaje = "No se pudo recuperar material de la base de datos";
            $borrado = false;
        }
        $this->mostrarMateriales($mensaje);
    }



    function showFormRegistroMat($mensaje = null){
        $materiales = $this->MaterialModel->obtenerMateriales();
        $this->View->registro_de_materiales('postRegistroMat',$materiales,$mensaje);
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
        
       $this->showFormRegistroMat('Pesaje cargado correctamente');

    }



    function showForm(){
        $this->View->showFormRetiro("postRetiro");
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
            $this->View->showRetiros($retiros);
        }else{
            $retiros = $this->RetirosModel->getRetiros($_GET['fechaselect']);
            $this->View->showRetiros($retiros);
        }

        

    }





}