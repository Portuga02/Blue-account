<?php

require_once 'helpers/erros.php';

class UsersModel extends Model {
    /* verificando se o usuário é cadastrado no sistema */

    private $userInfo;

    public function isLogged() {
        try {
            if (isset($_SESSION['Account']) && !empty($_SESSION['Account'])) {
                return true;
            } else {
                return false;
            }
        } catch (\Throwable $th) {
            MostrarErrorException($th);
        }
    }

    public function doLogin($email, $password) {
        try {
            $sql = $this->db->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
            $sql->bindValue(':email', $email);
            $sql->bindValue(':password', md5($password));
            $sql->execute();

            if ($sql->rowCount() > 0) {
                $row = $sql->fetch();
                $_SESSION['Account'] = $row['id'];
                return true;
            } else {
                return false;
            }
        } catch (\Throwable $th) {
            MostrarErrorException($th);
        }
    }

    public function setLoggedUser() {
        try {
            if (isset($_SESSION['Account']) && !empty($_SESSION['Account'])) {
                $id = $_SESSION['Account'];

                $sql = $this->db->prepare("SELECT * FROM users WHERE id = :id");
                $sql->bindValue(':id', $id);
                $sql->execute();

                if ($sql->rowCount() > 0) {
                    $this->userInfo = $sql->fetch();
                }
            }
        } catch (\Throwable $th) {
            MostrarErrorException($th);
        }
    }

    public function getCompany() {

        try {
            if (isset($this->userInfo['id_company'])) {
                return $this->userInfo;
            } else {
                return 0;
            }
        } catch (\Throwable $th) {
            MostrarErrorException($th);
        }
    }

}
