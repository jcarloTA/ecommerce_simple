<?php

define('DATABASE', [
    'driver'    => 'mysql',
    'host'      => '127.0.0.1',
    'database'  => 'databe',
    'username'  => 'uroot',
    'password'  => 'pass',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);


define('GM_EMAIL', [
    'Host' => 'smt.example.org',
    'SMTPAuth' => true,
    'Username' => 'example@admin.com',
    'Password' => 'user',
    'Port' => '587',
    'AddressFrom' => 'example@admin.com',
    'NameFrom' => 'example ',
    'AddressInbox' => 'example@gmail.com',
    'NameInbox' => 'Name',
]);