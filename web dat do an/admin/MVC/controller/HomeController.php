<?php
    require_once("MVC/models/home.php");
    class HomeController {
        var $home_model;
        public function __construct()
        {
            $this->home_model = new home();            
        }

        function home() {
            require_once('MVC/index.php');
        }
    }
?>