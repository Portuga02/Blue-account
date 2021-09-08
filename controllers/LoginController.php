<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginController
 *
 * @author savio
 */
class LoginController extends controller {

    public function index() {
        $data = [];
        $this->loadView('login', $data);
    }

}
