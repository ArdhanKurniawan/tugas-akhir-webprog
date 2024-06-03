<?php
require_once 'models/UserModel.php';

class Check {
    private $userModel;

    function encrypt($data, $key) {
        $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
        $encrypted = openssl_encrypt($data, 'aes-256-cbc', $key, 0, $iv);
        return base64_encode($encrypted . '::' . $iv);
    }
    
    function decrypt($data, $key) {
        list($encrypted_data, $iv) = explode('::', base64_decode($data), 2);
        return openssl_decrypt($encrypted_data, 'aes-256-cbc', $key, 0, $iv);
    }

    public function login() {
        session_start();
        if (isset($_SESSION['encrypted_data'])) {
            $decrypted_data = $this->decrypt($_SESSION['encrypted_data'], "lol123LOL");
            $data_session = json_decode($decrypted_data, true);

            $this->userModel = new UserModel();
            $user = $this->userModel->getUser(null, $data_session['name'], $data_session['email'], null);
            if ($user) {
                return $data_session;

            } else {
                return false;
            }
            
        } else {
            return false;
        }
    }
}