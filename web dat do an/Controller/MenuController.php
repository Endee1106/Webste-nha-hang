<?php
    require_once('Models/menu.php');
    class MenuController {
        var $menu_model;
        public function __construct() {
            $this->menu_model = new menu();
        }

        function getAll() {
            $allProduct = $this->menu_model->getPag();
            $condition = "";
            $latests = $this->menu_model->getLatest();
            $Categories = $this->menu_model->getCategories();
            if(isset($_GET['loai'])) {
                $loai = $_GET['loai'];
                $products = $this->menu_model->getProductByCategory($loai);
            } else if(isset($_GET['sort'])) {
                $sort = $_GET['sort'];
                $condition = "ORDER BY product_price $sort";
                $products = $this->menu_model->getAllProduct($condition);
            } else {
                $products = $this->menu_model->getAllProduct($condition);
            }
            require_once('Views/index.php');
        }
    }
?>