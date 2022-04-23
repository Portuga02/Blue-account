<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );
include_once 'helpers/erros.php';
require 'environment.php';

global $config;
$config = [];
try {
    if ( ENVIRONMENT == 'development' ) {
        $config[ 'dbname' ] = 'blue_account';
        $config[ 'host' ] = 'localhost';
        $config[ 'dbuser' ] = 'root';
        $config[ 'dbpass' ] = 'root';
    } else {
        $config[ 'dbname' ] = 'blue_account';
        $config[ 'host' ] = 'localhost';
        $config[ 'dbuser' ] = 'root';
        $config[ 'dbpass' ] = '';
    }
} catch ( \Throwable $th ) {
    MostrarErrorException( $th );
}
