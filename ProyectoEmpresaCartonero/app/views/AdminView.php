<?php

require_once('libs/smarty/libs/Smarty.class.php');

class AdminView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function showRetiros($retiros){
        
        $this->smarty->assign("titulo","Lista de retiros");
        $this->smarty->assign('retiros',$retiros);
        $this->smarty->display('templates/retiros.tpl');
        
    }


}