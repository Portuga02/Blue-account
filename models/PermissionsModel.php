<?php
ini_set( 'display_errors', 1 );
include_once 'helpers/erros.php';

class PermissionsModel extends Model {
    private $group;
    private $permissions;

    public function setGroup( $id, $id_company ) {
        try {
            $this->group = $id;
            $this->permissions = [];

            $sql  = $this->db->prepare( "SELECT params FROM permission_groups WHERE id = :id AND id_company = :id_company" );
            $sql->bindValue( ':id', $id );
            $sql->bindValue( ':id_company', $id_company );
            $sql->execute();

            if ( $sql->rowCount() >0 ) {
                $row = $sql->fetch();

                if ( empty( $row[ 'params' ] ) ) {
                    $row = '0';
                }

                $params = $row[ 'params' ];

                $sql = $this->db->prepare( "SELECT name FROM permission_params WHERE id IN ($params) AND id_company = :id_company" );
                $sql->bindValue( ':id_company', $id_company );
                $sql->execute();

                if ( $sql->rowCount() >0 ) {
                    foreach ( $sql->fetchAll() as $item ) {
                        $this->permissions[] = $item[ 'name' ];

                    }

                }

            }

        } catch ( \Throwable $th ) {
            MostrarErrorException( $th );
        }
        var_dump( $this->permissions );
        exit;
    }

    public function hasPermission( $name ) {

        try {
            if ( in_array( $name, $this->permissions ) ) {
                return true;
            } else {
                return false;
            }
        } catch ( \Throwable $th ) {
            MostrarErrorException( $th );
        }
    }
}
?>