/* aca mostraremos todas las rutas para acceder desde el menu de la aplicacion */
<?php
include_once "controllers/RetirosController.php";
include_once "controllers/MaterialController.php";

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
    /*case 'showFormRetiro'
        $controller = new RetirosController();
        $controller-> showForm();
        break;

    //////////////////////////////////
    case 'postblas'
        $controller = new RetirosController();
        $controller-> postRetiro();
        break;*/
    // listar materiales aceptados por la cooperativa
    case 'listmateriales'
        $controller = new MaterialController();
        $controller-> mostrarMateriales();
        break;

    default:
        echo('404 Page not found');
        break;
}
