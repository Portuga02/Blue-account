<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsersModel
 *
 * @author savio
 */
class UsersModel extends Model {
    /* verificando se o usuário é cadastrado no sistema */

    public function isLogged() {

        if (isset($_SESSION['userAccount']) && !empty($_SESSION['userAccount'])) {
            return true;
        } else {
            return false;
        }
    }

    /* VERICICAÇÃO PARA USUÁRIOS DEVIDAMENTE CADASTRADOS NO SISTEMA */

    public function doLogin($email, $password) {
        $sql = $this->db->prepare("SELECT * FROM users WHERE email = :email AND password = :password ");
        $sql->bindValue(':email', $email);
        $sql->bindValue(':password', md5($password));
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $row = $sql->fetchAll();
            $_SESSION['userAccount'] = $row['id'];
            return true;
        } else {
            return false;
        }
    }

}
