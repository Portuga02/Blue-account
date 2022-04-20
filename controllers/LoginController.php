<?php
class LoginController extends controller
{

    public function index()
    {
        $data = [];
        if (isset($_POST['email']) && !empty($_POST['email'])) {
            $email = addslashes($_POST['email']);
            $pass = addslashes($_POST['password']);

            $user = new UsersModel();

            if ($user->doLogin($email, $pass)) {
                header("Location: " . BASE_URL);
                exit;
            } else {
                $data['error'] = 'E-mail ou senha  estão incorretos.';
            }
        }

        $this->loadView('login', $data);
    }

    public function logout()
    {
        try {
            $user = new UsersModel();
            $user->logout();
            header("Location:" . BASE_URL);
        } catch (\Throwable $th) {
            MostrarErrorException($th);
        }
    }
}
