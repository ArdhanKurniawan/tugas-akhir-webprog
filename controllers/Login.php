<?php
require_once 'models/UserModel.php';

require_once 'libraries/Check.php';
require_once 'libraries/Constants.php';

class Login {
    private $userModel;
    private $checkLibrary;
    private $constants;

    public function __construct() {
        $this->checkLibrary = new Check();
    }

    public function index() {
        if ($this->checkLibrary->login() != false) {
            header('Location: dashboard');
            exit();
        }

        $this->constants = new Constants();

        $base_url = $this->constants->base_url();

        include 'views/login_internal.php';
    }

    public function do_login() {
        session_start();

        if ($this->checkLibrary->login() != false) {
            header('Location: dashboard');
            exit();
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->userModel = new UserModel();

            $email = $_POST['email'];
            $password = hash('sha256', $_POST['password']);

            $user = $this->userModel->getUser(null, null, $email, $password);
            if ($user) {
                $encryption_key = 'lol123LOL';
                $data_session = [
                    'id' => $user->id,
                    'name' => $user->nama,
                    'email' => $email
                ];

                $encrypted_data = $this->checkLibrary->encrypt(json_encode($data_session), $encryption_key);
                $_SESSION['encrypted_data'] = $encrypted_data;

                header('Location: dashboard');
                exit();
                
            } else {
                header('Location: login');
                exit();
            }

        } else {
            // Jika akses langsung ke file ini tanpa melalui form login
            header('Location: login');
            exit();
        }
    }
}