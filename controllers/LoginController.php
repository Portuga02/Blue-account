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

        if (isset($_POST['email']) && !empty($_POST['email'])) {
            $email = addslashes($_POST['email']);
            $pass = addslashes($_POST['password']);

            $user = new UsersModel();

            if ($user->doLogin($email, $pass)) {
                header("Location: " . BASE_URL);
                exit;
            } else {
                $data['error'] = 'E-mail e/ou senha errados.';
            }
        }

        $this->loadView('Login', $data);
    }

}
