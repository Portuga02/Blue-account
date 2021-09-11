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
            $password = addslashes($_POST['password']);
            
            $user = new UsersModel();

            if ($user->doLogin($email, $password)) {
                header("Location:" . BASE_URL);
            } else {
                $data['error'] = 'Email ou senha errados';
            }
        }

        $this->loadView('Login', $data);
    }

}
