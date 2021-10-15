<?php

include_once 'app/models/MaterialsModel.php';
include_once 'app/views/MaterialsView.php';

class MaterialController
{

    private $model;
    private $view;

    function __construct()
    {
        $this->model = new MaterialsModel();
        $this->view = new MaterialsView();
    }

    /**
     * Imprime la lista de materiales que hay disponibles para el reciclado
     */
    function mostrarMateriales()
    {
        // obtiene las diferentes materiales del modelo
        $materiales = $this->model->obtenerMateriales();

        // actualizo la vista
        $this->view->mostrarMaterialesAceptados($materiales);
    }
}