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

        $this->view->mostrarFormulario($mensaje);
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
        $id = $_POST['id_material'];
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $es_aceptado = $_POST['es_aceptado'];

        // verifico campos obligatorios
        if (empty($nombre) || empty($descripcion)|| empty($es_aceptado)) {
            $mensaje = "Debe completar los datos requeridos para la carga de material.";
            $this->mostrarMateriales($mensaje);
        }else{
            $idAct = $this->model->actualizarMaterial($nombre, $descripcion, $es_aceptado, $id);
            if ($idAct) {
                $mensaje = "Se actualizo de manera exitosa";
            } else {
                $mensaje = "No se pudo actualizar el material. Verifique los datos ingresados y vuelva a intentarlo.";
            }
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