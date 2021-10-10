<?php

//importar controladores!
include_once "app/controller/static.controller.php";


// defino la base url para la construccion de links con urls semánticas
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían en este caso es el home de la pagina
}

// parsea la accion Ej: suma/1/2 --> ['suma', 1, 2]
$params = explode('/', $action);

// determina que camino seguir según la acción
switch ($params[0]) {

    case 'home':
        $controller = new StaticController();
        $controller->showHome();
        break;

    case 'market':
        $controller = new MarketController();
        $controller->showMarket();
        break;

    case 'login':
        $controller = new AuthController();
        $controller->showLogin();
        break;

    case 'register':
        $controller = new AuthController();
        $controller->showRegister();
        break;

    case 'verifyLogin':
        $controller = new AuthController();
        $controller->verifyLogin();
        break;

    case 'verifyRegister':
        $controller = new AuthController();
        $controller->verifyRegister();
        break;

    case 'profile':
        $controller = new UserController();
        $controller->showProfile();
        break;
    
    case 'friends':
        $controller = new UserController();
        $controller->showFriends();
        break;

    case 'logout':
        $controller = new AuthHelper();
        $controller->logOut();
        break;

    case 'findFriend':
        $controller = new UserController();
        $controller->findFriend();
        break;
    
    case 'sendInvite':
        $controller = new UserController();
        $friendId = $params[1];
        $controller->sendInvite($friendId);
        break;

    case 'aceptInvite':
        $controller = new UserController();
        $messageId = $params[1];
        $controller->aceptInvite($messageId);
        break;

    case 'denyInvite':
        $controller = new UserController();
        $messageId = $params[1];
        $controller->denyInvite($messageId);
        break;

    case 'island':
        $controller = new IslandController();
        $controller->showIsland();
        break;

    default:
        echo('404 Page not found');
        break;
}
