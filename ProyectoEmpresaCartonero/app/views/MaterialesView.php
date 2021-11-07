<?php

require_once('libs/smarty/libs/Smarty.class.php');

class MaterialesView
{

    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    /** 
     *   Muestra el listado de materiales aceptados actuales
     **/
    function mostrarMaterialesAceptados($materiales)
    {

        $smarty = new Smarty();

        $smarty->assign('materiales', $materiales);

        $smarty->display('templates/materiales.tpl');
    }
    
    function show()
    {
        $this->smarty->assign(
            'titulo',
            "Muestra los materiales y condiciones de aceptación para reciclar"
        );
        $this->smarty->display('./templates/materiales.tpl');
    }

    function listadoDeMateriales()
    {
    }

    function mostrarFormularioAlta()
    {
    }

    function mostrarFormularioModificar()
    {
    }
}
