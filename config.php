<?php

require 'environment.php';

global $config;
$config = [];
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
