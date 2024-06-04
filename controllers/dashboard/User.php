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

    public function detail() {
        $this->constants = new Constants();
        $this->userModel = new UserModel();

        $user = $this->userModel->getUser($_GET['id'], null, null, null);
        $base_url = $this->constants->base_url();

        include 'views/dashboard/user_detail.php';
    }

    public function update() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->userModel = new UserModel();

            $id = $_POST['id'];
            if ($id) {
                $check = $this->userModel->getUser($id, null, null, null);
                if ($check) {
                    if (empty($_POST['oldpwd']) && !empty($_POST['newpwd'])) {
                        header('Location: ../../dashboard/user/detail?id=' . $id);
                        
                    } elseif (!empty($password)) {
                        if ($_POST['newpwd'] == $_POST['conpwd']) {
                            $oldpass = hash('sha256', $_POST['oldpwd']);
            
                            if ($check->password == $oldpass) {
                                $data = [
                                    "nama" => $_POST['nama'],
                                    "whatsapp" => $_POST['whatsapp'],
                                    "email" => $_POST['email'],
                                    "password" => hash('sha256', $_POST['newpwd']),
                                    "status" => $_POST['status'],
                                ];

                                $this->userModel->updateUser($id, $data);
                                header('Location: ../../dashboard');
                                
                            } else {
                                header('Location: ../../dashboard/user/detail?id=' . $id);
                            }
                            
                        } else {
                            header('Location: ../../dashboard/user/detail?id=' . $id);
                        }
                        
                    } else {
                        $data = [
                            "nama" => $_POST['nama'],
                            "whatsapp" => $_POST['whatsapp'],
                            "email" => $_POST['email'],
                            "password" => $check->password,
                            "status" => $_POST['status'],
                        ];
                        $this->userModel->updateUser($id, $data);
                        header('Location: ../../dashboard');
                    }
                }
            }

        } else {
            header('Location: ../../dashboard');
        }
    }

    public function delete() {
        if ($_GET['id']) {
            $this->userModel = new UserModel();
            
            $this->userModel->deleteUser($_GET['id']);
            header('Location: ../../dashboard');

        } else {
            header('Location: ../../dashboard');
        }
    }
}