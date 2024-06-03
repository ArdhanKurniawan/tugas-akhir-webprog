<?php
require_once 'models/UserModel.php';

require_once 'libraries/Check.php';
require_once 'libraries/Constants.php';

class Home {
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

        include 'views/dashboard/home.php';
    }
}