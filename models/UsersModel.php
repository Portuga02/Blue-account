<?php

require_once 'helpers/erros.php';

class UsersModel extends Model {
    /* verificando se o usuário é cadastrado no sistema */

    private $userInfo;

    public function isLogged() {
        try {
            if ( isset( $_SESSION[ 'Account' ] ) && !empty( $_SESSION[ 'Account' ] ) ) {
                return true;
            } else {
                return false;
            }
        } catch ( \Throwable $th ) {
            MostrarErrorException( $th );
        }
    }

    public function doLogin( $email, $password ) {
        try {
            $sql = $this->db->prepare( 'SELECT * FROM users WHERE email = :email AND password = :password' );
            $sql->bindValue( ':email', $email );
            $sql->bindValue( ':password', md5( $password ) );
            $sql->execute();

            if ( $sql->rowCount() > 0 ) {
                $row = $sql->fetch();
                $_SESSION[ 'Account' ] = $row[ 'id' ];
                return true;
            } else {
                return false;
            }
        } catch ( \Throwable $th ) {
            MostrarErrorException( $th );
        }
    }

    public function setLoggedUser() {
        try {
            if ( isset( $_SESSION[ 'Account' ] ) && !empty( $_SESSION[ 'Account' ] ) ) {
                $id = $_SESSION[ 'Account' ];
                $sql = $this->db->prepare( 'SELECT * FROM users WHERE id = :id' );
                $sql->bindValue( ':id', $id );
                $sql->execute();

                if ( $sql->rowCount() > 0 ) {
                    $this->userInfo = $sql->fetch();
                    $this->permissions = new PermissionsModel();
                	$this->permissions->setGroup($this->userInfo['id_group'], $this->userInfo['id_company']);
                }
            }
        } catch ( \Throwable $th ) {
            MostrarErrorException( $th );
        }
    }

    public function getCompany() {

        try {
            if ( isset( $this->userInfo[ 'id_company' ] ) ) {
                return $this->userInfo[ 'id_company' ];
            } else {
                return 0;
            }
        } catch ( \Throwable $th ) {
            MostrarErrorException( $th );
        }
    }

    public function getUserEmail() {
        try {
            if ( isset( $this->userInfo[ 'email' ] ) ) {
                return $this->userInfo[ 'email' ];
            } else {
                return '';
            }
        } catch ( \Throwable $th ) {
            MostrarErrorException( $th );
        }
    }

    public function logout() {
        try {
            unset( $_SESSION[ 'Account' ] );
        } catch ( \Throwable $th ) {
            MostrarErrorException( $th );
        }

    }

    public function hasPermission( $name ) {
        try {
            return $this->permissions->hasPermission( $name );
        } catch ( \Throwable $th ) {
            MostrarErrorException( $th );
        }
    }

}
