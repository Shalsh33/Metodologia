<?php
include_once "app/controllers/CooperativaController.php";


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
        $controller = new CooperativaController();
        $controller->showForm();
        break;

    //////////////////////////////////
    case 'postRetiro':
        $controller = new CooperativaController();
        $controller->postRetiro();
        break;
    case 'listMateriales':
        $controller = new CooperativaController();
        $controller->mostrarMateriales();
        break;
        
    case 'listRetiros':
        $controller = new CooperativaController();
        $controller->showListRetiros();
        break;
    case 'insertar_mat':
        $controller = new CooperativaController();
        $controller-> agregarMateriales();
        break;    
    case 'eliminar_mat':
        $controller = new CooperativaController();
        $id = $params[1];
        $controller->eliminarMaterial($id);
        break;
    case 'editar_mat':
        $controller = new CooperativaController();
        $id = $params[1];
        $controller->editarMaterial($id);
        break; 
    case 'guardar_mat':
        $controller = new CooperativaController();
        $controller->agregarUnMaterial();
        break;    
    //Registro de materiales
    case 'showFormRegistroMat':
        $controller = new CooperativaController();
        $controller-> showFormRegistroMat();
        break;
    case 'postRegistroMat':
        $controller = new CooperativaController();
        $controller-> postRegistroMat();
        break;
    default:
        echo('404 Page not found');
        break;
}
