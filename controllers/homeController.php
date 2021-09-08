<?php

class homeController extends controller {

    public function __construct() {
        parent::__construct();
        $user = new UsersModel();
        if($user->isLogged == false) {
            header("Location:".BASE_URL."/Login");
        }
    }

    public function index() {
        $dados =[];

        $this->loadTemplate('home', $dados);
    }

}
