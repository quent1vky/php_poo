<?php

require_once './routes.php';
require_once './controller/personnageController.php';
require_once './vu/personnageView.php';
require_once './modele/personnage.php';



// Récupération de l'URL
$url = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '/';

if(isset($_POST['action'])){
    $url = $_POST['action'];
}

// Vérification de l'existence de la route correspondante
if (isset($routes[$url])) {
    $route = $routes[$url];

    // Instanciation du contrôleur correspondant
    $controllerName = $route['controller'];
    $controller = new $controllerName();

    // Appel de la méthode correspondante
    $actionName = $route['action'];
    $controller->$actionName();
} else {
    // Route non trouvée
    header('HTTP/1.0 404 Not Found');
    echo 'Page not found';
}
?>

