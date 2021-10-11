<?php

require_once('../smarty/libs/Smarty.class.php');

class UserView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function solicitud_de_retiro($action){
        $this->smarty->assign('action',$action);
        $this->smarty->display('../templates/solicitud_de_retiro.tpl');
    }


}