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

    function listadoDeMateriales($materiales)
    {
        $smarty = new Smarty();

        $smarty->assign('materiales', $materiales);
    
        $smarty->display('templates/lista_material.tpl');
    }

    function mostrarFormularioAlta()
    {
        $this->smarty->assign(
            'titulo',
            "Formulario de ingreso de materiales aceptados por la Cooperativa"
        );
        $this->smarty->display('./templates/form_materiales.tpl');
    }

    function mostrarFormularioModificar()
    {
    }
    
    function editarMaterialVista($material){
        $smarty = new Smarty(); 
        $smarty->assign('material', $material);
        $smarty->display('templates/form_edit_material.tpl'); 
    }
}
