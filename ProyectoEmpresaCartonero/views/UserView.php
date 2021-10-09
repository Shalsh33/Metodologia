<?php

require_once('../smarty/libs/Smarty.class.php');

class UserView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function solicitud_de_retiro($materiales_aceptados){
        $this->smarty->assign('materiales',$materiales_aceptados);
        $this->smarty->display('../templates/solicitud_de_retiro.tpl');
    }


}