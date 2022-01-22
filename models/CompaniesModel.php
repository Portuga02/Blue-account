<?php
require_once 'helpers/erros.php';

class CompaniesModel extends Model
{
    private  $companyInfo;

    public function __construct($id)
    {

        parent::__construct();
        try {
            $sql = $this->db->prepare("SELECT * FROM companies WHERE id = :id");
            $sql->bindParam(':id', $id);
            $sql->execute();

            if ($sql->rowCount() > 0) {
                $this->companyInfo = $sql->fetch();
            }
        } catch (\Throwable $th) {
            MostrarErrorException($th);
        }
    }

    public function getName()
    {
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
