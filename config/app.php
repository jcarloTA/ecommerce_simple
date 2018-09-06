<?php

session_start();

define('APP_PATH', __DIR__ .'/../');
define('PUBLIC_PATH', 'http://gameplace.dev');


//Composer 
require_once APP_PATH . 'vendor/autoload.php';

//Variables de entorno
require_once 'env.php';

//Base de datos
require_once 'database.php';

//Rutas
require_once 'routes.php';
