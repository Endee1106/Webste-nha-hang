<?php
    $act = isset($_GET['act']) ? $_GET['act'] : "home";
    switch($act) {
        case 'home':
            require_once("Home/home.php");
            break;
        case 'about':
            require_once("About/about.php");
            break;
        case 'menu':
            require_once("Menu/menu.php");
            break;
        case "cart":
            require_once("ShoppingCart/shopping-cart.php");
            break;
        case 'detail':
            require_once("ShopDelis/shop-delis.php");
            break;
        case 'contact':
            require_once("Contact/contact.php");
            break;
        case 'checkout':
            $mod = isset($_GET['xuli']) ? $_GET['xuli'] : "home";
            switch($mod) {
                case 'done':
                    require_once("ThanhToan/success.php");
                    break;
                default:
                    require_once("ThanhToan/thanhtoan.php");
                    break;
            }
            break;
        case 'service':
            require_once("Service/service.php");
            break;
        case 'login':
            require_once("Login/login.php");
            break;
        case 'register':
            require_once("Register/Register.php");
            break;
        case 'info':
            require_once("Information/Infor.php");
            break;
    }
?>