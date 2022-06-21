<?php
    require_once('Models/home.php');
    class HomeController {
        var $home_model;
        public function __construct() {
            $this->home_model = new home();
        }
        function list() {
            $productList = $this->home_model->getList();
            $top4 = $this->home_model->getTop4();
            require_once('Views/index.php');
        }
       
    }
?>