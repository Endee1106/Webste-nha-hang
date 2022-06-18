<?php
    require_once('model.php');
    class info extends model {
        function account()
        {
            $id = $_SESSION['login']['user_id'];
            return $this->conn->query("SELECT * from tbl_user where user_id = $id")->fetch_assoc();
        }
        function update_account($data)
        {
            $v = "";
            foreach ($data as $key => $value) {
                $v .= $key . "='" . $value . "',";
            }
            $v = trim($v, ",");
    
            $query = "UPDATE tbl_user SET  $v   WHERE  user_id = " . $_SESSION['login']['user_id'];
    
            $result = $this->conn->query($query);
            
            if ($result == true) {
                setcookie('doimk', 'Cập nhật tài khoản thành công', time() + 2);
                header("location: ?act=home");
            } else {
                setcookie('doimk', 'Mật khẩu xác nhận không đúng', time() + 2);
                header("location: ?act=info");
            }
        }
        function error()
        {
            header('location: ?act=errors');
        }
    }
?>
