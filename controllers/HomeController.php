<?php
require_once 'helpers/erros.php';
class HomeController extends controller
{

    public function __construct()
    {
        parent::__construct();
        $user = new UsersModel();
        if ($user->isLogged() == false) {
            header("Location:" . BASE_URL . "/Login");
        }
    }

    public function index()
    {

  $data = array();
        $u = new UsersModel();
        $u->setLoggedUser();
        $company = new CompaniesModel($u->getCompany());
        $data['company_name'] = $company->getName();

        $this->loadTemplate('home', $data);
    }
}
