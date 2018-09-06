<?php


namespace App\Libraries;

use App\Controllers\GameController;

class Route {

    public static function any($controller = null, $action = 'index')
    {

        if ($controller) {
            $controller = "\\App\\Controllers\\{$controller}Controller";
            // echo $controller . '\n';
            $controller = new $controller;
        } else {
            $controller = new GameController;
        }

        if (method_exists($controller, $action)) {
            return $controller->$action();
        } else {
            header('HTTP/1.0 404 Not Found');
            die('Pagina no encontrada');
        }
    }
}

