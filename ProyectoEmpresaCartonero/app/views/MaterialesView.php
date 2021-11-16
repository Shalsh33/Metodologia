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


}