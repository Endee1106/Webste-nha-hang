<?php
    require_once('Models/service.php');
    class ServiceController {
        var $service_model;
        public function __construct() {
            $this->service_model = new service();
        }

        function service() {
            $images = $this->service_model->getService();
            require_once('Views/index.php');
        }
    }
?>