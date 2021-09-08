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
        try {
            if (isset($_SESSION['userAcount']) && !empty($_SESSION['userAcount'])) {
                return true;
            }
        } catch (Exception $exc) {
            echo "" . $exc->getTraceAsString();
        } finally {
            return false;
        }
    }

}
