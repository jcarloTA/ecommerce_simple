<?php

define('ROUTES', [
    ''          =>    ['controller' => 'Page', 'action' => 'index'],
    'nosotros'  =>    ['controller' => 'Page', 'action' => 'about'],
    'productos' =>    ['controller' => 'Game', 'action' => 'index'],
    'producto' =>    ['controller' => 'Game', 'action' => 'show'],
    'contacto'  =>    ['controller' => 'Page', 'action' => 'contact'],
]);