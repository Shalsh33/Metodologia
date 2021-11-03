<?php

require_once('libs/smarty/libs/Smarty.class.php');

class UserView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function showFormRetiro($action){
        $this->smarty->assign("titulo","Solicitar retiro");
        $this->smarty->assign('action',$action);
        $this->smarty->display('templates/solicitud_de_retiro.tpl');
    }

}