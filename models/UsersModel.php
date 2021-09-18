<?php

class UsersModel extends Model
{
    /* verificando se o usuário é cadastrado no sistema */

    public function isLogged()
    {
        if (isset($_SESSION['Account']) && !empty($_SESSION['Account'])) {
            return true;
        } else {
            return false;
        }
    }

    public function doLogin($email, $password)
    {
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
    }
}
