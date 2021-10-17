<?php

require_once('libs/smarty/libs/Smarty.class.php');

class MaterialsView {

    /** 
     *   Muestra el listado de materiales aceptados actuales
    **/
    function mostrarMateriales($materiales) {
        
        $smarty = new Smarty();

        $smarty->assign('materiales', $materiales);
    
        $smarty->display('templates/materiales.tpl');
    }
    
}