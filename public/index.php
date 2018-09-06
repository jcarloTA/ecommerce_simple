<?php

require_once '../config/app.php';

use App\Libraries\Route;

$url = $_GET['url'] ?? '';
$route = ROUTES[$url] ?? false;

if ($route) {
    $controlador = $route['controller'];
    $action = $route['action'];
    Route::any($controlador,$action);
} else {
    header('HTTP/1.0 404 Not Found');
    die('Pagina no encontrada');
}
