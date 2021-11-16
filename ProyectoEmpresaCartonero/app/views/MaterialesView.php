<?php

require_once('libs/smarty/libs/Smarty.class.php');

class MaterialesView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function show(){
        $this->smarty->assign('titulo',
         "Muestra los materiales y condiciones de aceptación para reciclar");
        $this->smarty->display('./templates/materiales.tpl');
    }

    function registro_de_materiales($action,$materiales = null){
        $this->smarty->assign('titulo',
         "Registro de Materiales");
        $this->smarty->assign('materiales',$materiales);
        $this->smarty->assign('action',$action);
        $this->smarty->display('templates/registro_de_materiales.tpl');
    }


}