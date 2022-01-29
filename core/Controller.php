<?php
require_once 'helpers/erros.php';
class controller {

    protected $db;

    public function __construct() {
        try {
            global $config;
            $this->db = new PDO("mysql:dbname=" . $config['dbname'] . ";host=" . $config['host'], $config['dbuser'], $config['dbpass']);
        } catch (\Throwable $th) {
            MostrarErrorException($th);
        }
    }

    public function loadView($viewName, $viewData = array()) {
        extract($viewData);
        include 'views/' . $viewName . '.php';
    }

    public function loadTemplate($viewName, $viewData = array()) {
        include 'views/template.php';
    }

    public function loadViewInTemplate($viewName, $viewData) {
        extract($viewData);
        include 'views/' . $viewName . '.php';
    }

    public function loadLibrary($lib) {
        if (file_exists('libraries/' . $lib . '.php')) {
            include 'libraries/' . $lib . '.php';
        }
    }

}
