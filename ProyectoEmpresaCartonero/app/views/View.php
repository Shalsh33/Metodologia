<?php

require_once('libs/smarty/libs/Smarty.class.php');


class View{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function showFormRetiro($action){
        $this->smarty->assign("titulo","Solicitar retiro");
        $this->smarty->assign('action',$action);
        $this->smarty->display('templates/solicitud_de_retiro.tpl');
    }

     /** 
     *   Muestra el listado de materiales aceptados actuales
     **/
    function mostrarMaterialesAceptados($materiales)
    {

        $this->smarty->debugging = true;
        $this->smarty->assign('materiales', $materiales);
        $this->smarty->assign('titulo', "Lista de materiales");

        $this->smarty->display('templates/lista_material.tpl');
    }
    
    function show()
    {
        $this->smarty->assign(
            'titulo',
            "Muestra los materiales y condiciones de aceptación para reciclar"
        );
        $this->smarty->display('./templates/materiales.tpl');
    }

    function listadoDeMateriales($materiales, $mensaje)
    {
        $this->smarty->assign('materiales', $materiales);
        $this->smarty->assign(
            'titulo',
            "Listado de materiales"
        );
        $this->smarty->assign('mensaje', $mensaje );
        $this->smarty->display('templates/lista_material.tpl');
    }

    function mostrarFormularioAlta($mensaje)
    {
        $this->smarty->assign(
            'titulo',
            "Ingreso de materiales"
        );
        $this->smarty->assign(
            'mensaje', $mensaje );
        $this->smarty->display('./templates/form_materiales.tpl');
    }

    function registro_de_materiales($action,$materiales = null,$mensaje = null){
        $this->smarty->assign('titulo',
         "Registro de Materiales");
        $this->smarty->assign('materiales',$materiales);
        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->assign('action',$action);
        $this->smarty->display('templates/registro_de_materiales.tpl');
    }


    function mostrarFormularioModificar()
    {
    }
    
    function editarMaterialVista($material){
        $this->smarty->assign('material', $material);
        $this->smarty->assign(
            'titulo',
            "Editar material"
        );
        $this->smarty->display('templates/form_edit_material.tpl'); 
    }

    function showRetiros($retiros){
        
        $this->smarty->assign("titulo","Lista de retiros");
        $this->smarty->assign('retiros',$retiros);
        $this->smarty->display('templates/retiros.tpl');
        
    }


}