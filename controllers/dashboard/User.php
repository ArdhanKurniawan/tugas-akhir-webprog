<?php
require_once 'models/UserModel.php';

require_once 'libraries/Check.php';
require_once 'libraries/Constants.php';

class User {
    private $userModel;
    private $checkLibrary;
    private $constants;

    public function __construct() {
        $this->checkLibrary = new Check();

        if ($this->checkLibrary->login() == false) {
            header('Location: login');
            exit();
        }
    }

    public function index() {
        $this->constants = new Constants();
        $this->userModel = new UserModel();

        $users = $this->userModel->getAllUsers();
        $base_url = $this->constants->base_url();

        include 'views/dashboard/user.php';
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->userModel = new UserModel();

            $data = [
                "nama" => $_POST['nama'],
                "whatsapp" => $_POST['whatsapp'],
                "email" => $_POST['email'],
                "password" => hash('sha256', $_POST['pwd']),
                "status" => $_POST['status'],
            ];
            
            $check = $this->userModel->getUser(null, $data['nama'], $data['email'], null);
            if ($check) {
                header('Location: dashboard');
                
            } else {
                $this->userModel->addUser($data);
                header('Location: ../../dashboard');
            }

        } else {
            header('Location: ../../dashboard');
        }
    }

    public function delete($id) {
        $this->userModel->deleteUser($id);
        header('Location: index.php');
    }
}