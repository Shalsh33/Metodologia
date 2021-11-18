<?php
include_once "app/controllers/RetirosController.php";
include_once "app/controllers/MaterialController.php";
include_once "app/controllers/RegistroMaterialesController.php";

// defino la base url para la construccion de links con urls semánticas
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'showFormRetiro'; // acción por defecto si no envían en este caso es el home de la pagina
}

// parsea la accion Ej: suma/1/2 --> ['suma', 1, 2]
$params = explode('/', $action);

// determina que camino seguir según la acción
switch ($params[0]) {
    case 'showFormRetiro':
        $controller = new RetirosController();
        $controller->showForm();
        break;

    //////////////////////////////////
    case 'postRetiro':
        $controller = new RetirosController();
        $controller->postRetiro();
        break;
    case 'listMateriales':
        $controller = new MaterialController();
        $controller->mostrarMateriales();
        break;
        
    case 'listRetiros':
        $controller = new RetirosController();
        $controller->showListRetiros();
        break;
    case 'insertar_mat':
        $controller = new MaterialController();
        $controller-> agregarMateriales();
        break;    
    case 'eliminar_mat':
        $controller = new MaterialController();
        $id = $params[1];
        $controller->eliminarMaterial($id);
        break;
    case 'editar_mat':
        $controller = new MaterialController();
        $id = $params[1];
        $controller->editarMaterial($id);
        break; 
    case 'guardar_mat':
        $controller = new MaterialController();
        $controller->agregarUnMaterial();
        break;    
    //Registro de materiales
    case 'showFormRegistroMat':
        $controller = new RegistroMaterialesController();
        $controller-> showFormRegistroMat();
        break;
    case 'postRegistroMat':
        $controller = new RegistroMaterialesController();
        $controller-> postRegistroMat();
        break;
    default:
        echo('404 Page not found');
        break;
}
