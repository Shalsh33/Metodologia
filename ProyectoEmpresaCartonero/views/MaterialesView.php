<?php

require_once('smarty/libs/Smarty.class.php');

class MaterialesView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function show(){
        $this->smarty->display('templates/panel-materiales');
    }


}