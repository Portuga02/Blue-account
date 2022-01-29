<?php
error_reporting(E_ALL);
ini_set("display_errors", 1 );
require 'environment.php';

global $config;
$config = [];
try {
    if (ENVIRONMENT == 'development') {
        $config['dbname'] = 'blue_account';
        $config['host'] = 'localhost';
        $config['dbuser'] = 'root';
        $config['dbpass'] = '';
    } else {
        $config['dbname'] = 'blue_account';
        $config['host'] = 'localhost';
        $config['dbuser'] = 'root';
        $config['dbpass'] = '';
    }
} catch (\Throwable $th) {
    echo "!Error";
}
