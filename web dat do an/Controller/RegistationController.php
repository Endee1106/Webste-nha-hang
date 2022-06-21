<?php
    require_once('Models/register.php');
    class RegistationController {
        var $register_model;
        public function __construct() {
            $this->register_model = new register();
        }

        function show() {
            require_once('Views/index.php');
        }

        function getAccount() {
            $this->register_model->register_user();
        }
    }
?>