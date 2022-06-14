<?php
    
    require_once('model.php');

    class login extends model {
        function get_user(){

            // include_once("./Controller/session.php");
            $username = $_POST['username'];
            $password = $_POST['password'];
            $sql = "SELECT * from tbl_user WHERE username='$username' AND password='$password'";
            $rs = $this->conn->query($sql)->fetch_assoc();
            if ($rs !== NULL) {
                $_SESSION['valid'] = true;
                $_SESSION['login'] = $rs;
                header("location: ?act=home");
                die();
            } else {
                header("location: ?act=login");
                setcookie('msg', 'Tên tài khoản hoặc Email  đã tồn tại', time() + 2);
            }
        }

        function logout() {
            if(isset($_SESSION['login'])){
                unset($_SESSION['login']);
            }

            header('location: ?act=login');
        }

    }
?>
