<?php
error_reporting(E_ALL);
ini_set("display_errors", 1 );
include_once 'helpers/erros.php';

class CompaniesModel extends model {

    private $companyInfo;

    public function __construct($id) {
        parent::__construct();

        try {

            $sql = $this->db->prepare("SELECT * FROM companies WHERE id = :id");
            $sql->bindValue(':id', $id);
            $sql->execute();
            var_dump($id);

            if ($sql->rowCount() > 0) {
                $this->companyInfo = $sql->fetchAll();
            }
        } catch (\Throwable $th) {
            MostrarErrorException($th);
        }
    }

    public function getName() {
        try {
            if (isset($this->companyInfo['name'])) {
                return $this->companyInfo['name'];
            } else {
                return '';
            }
        } catch (\Throwable $th) {
            MostrarErrorException($th);
        }
    }

}
