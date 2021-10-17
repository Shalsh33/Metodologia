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
    function mostrarMateriales()
    {
        // actualizo la vista
        $this->view->show();
    }
}