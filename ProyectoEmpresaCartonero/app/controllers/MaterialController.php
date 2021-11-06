<?php

include_once 'app/views/MaterialesView.php';

class MaterialController
{

    private $model;
    private $view;

    function __construct()
    {
       $this->view = new MaterialesView();
    }

    /**
     * Imprime la lista de materiales que hay disponibles para el reciclado
     */
    function mostrarMateriales($mensaje)
    {
        // actualizo la vista
        $this->view->listadoDeMateriales($mensaje);
    }

    /**
     * Muestra el formulario de carga de materiales
     */
    function agregarMateriales($mensaje){

        $this->view->mostrarFormularioAlta($mensaje);
    }

    /**
     * Muestra el formulario de actualizacion de materiales
     */
    function actualizarMateriales($mensaje){

        $this->view->mostrarFormularioModificar($mensaje);
    }

    /**
     * Registra el material en el sistema
     */
    function agregarUnMaterial(){

        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $es_aceptado = $_POST['es_aceptado'];

        // verifico campos obligatorios
        if (empty($nombre) || empty($descripcion)|| empty($es_aceptado)) {
            $mensaje = "Debe completar los datos requeridos para la carga de material.";
            $this->agregarMateriales($mensaje);
        }else{
            $id = $this->model->insertarMaterial($nombre, $descripcion, $es_aceptado);
            if ($id) {
                $mensaje = "Se cargo el material de manera exitosa";
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
        if ((is_numeric($id)) && ($this->model->existeMaterial($id)>0)){
            // verifico campos obligatorios
            if (empty($nombre) || empty($descripcion)|| empty($es_aceptado)) {
                $mensaje = "Debe completar los datos requeridos para la carga de material.";
                $this->mostrarMateriales($mensaje);
            }else{
                // si se verifico todo se actualiza el material
                $idAct = $this->model->actualizarMaterial($nombre, $descripcion, $es_aceptado, $id);
                if ($idAct) {
                    $mensaje = "Se actualizo de manera exitosa";
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

    /**
     * Elimina el material registrado en el sistema
     */
    function eliminarMaterial($id)
    {
        if (is_numeric($id)) {
            $borrado = $this->model->eliminarMaterial($id);
            if ($borrado) {
                $mensaje = "El material ha sido eliminad0.";
            } else {
                $mensaje = "Ups!!! ... No se pudo borrar el material.";
            }
        } else {
            $mensaje = "No se pudo recuperar material de la base de datos";
            $borrado = false;
        }
        $this->mostrarMateriales($mensaje);
    }
}