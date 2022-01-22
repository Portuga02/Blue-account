<?php

require 'environment.php';

global $config;
$config = [];
try {
    if (ENVIRONMENT == 'development') {
        $config['dbname'] = 'conta_azul';
        $config['host'] = 'localhost';
        $config['dbuser'] = 'root';
        $config['dbpass'] = '';
    } else {
        $config['dbname'] = 'conta_azul';
        $config['host'] = 'localhost';
        $config['dbuser'] = 'root';
        $config['dbpass'] = '';
    }
} catch (\Throwable $th) {
    echo "!Error";
}
