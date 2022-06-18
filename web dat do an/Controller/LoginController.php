<?php
    require_once('Models/login.php');
    class LoginController {
        var $login_model;
        public function __construct() {
            $this->login_model = new login();
        }

        function show() {
            require_once('Views/index.php');
        }

        function getUser() {
            $this->login_model->get_user();
        }

        function logout() {
            $this->login_model->logout();
        }
    }
?>