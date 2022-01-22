<?php

class controller
{

    protected $db;

    public function __construct()
    {
        global $config;
        try {
            $this->db = new PDO("mysql:dbname=" . $config['dbname'] . ";host=" . $config['host'], $config['dbuser'], $config['dbpass']);
        } catch (\PDOException $th) {
            echo "Não foi possivel fazer conexão com os dados " . $th->getMessage();
        }
    }

    public function loadView($viewName, $viewData = [])
    {
        extract($viewData);
        include 'views/' . $viewName . '.php';
    }

    public function loadTemplate($viewName, $viewData = [])
    {
        include 'views/Template.php';
    }

    public function loadViewInTemplate($viewName, $viewData)
    {
        extract($viewData);
        include 'views/' . $viewName . '.php';
    }
}
