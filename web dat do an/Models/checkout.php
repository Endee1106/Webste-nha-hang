<?php
    require_once('model.php');
    class checkout extends model {
        function save($data){
            $f = "";
            $v = "";
            foreach ($data as $key => $value) {
                $f .= $key . ",";
                $v .= "'" . $value . "',";
            }
            $f = trim($f, ",");
            $v = trim($v, ",");
            $query = "INSERT INTO tbl_order($f) VALUES ($v);";
            
            $status = $this->conn->query($query);
        
            $query_mahd = "select order_id from tbl_order ORDER BY created_at DESC LIMIT 1";
            $data_mahd = $this->conn->query($query_mahd)->fetch_assoc();
        
            foreach ($_SESSION['cartb'] as $value) {
                $MaSP =$value['product_id'];
                $SoLuong = $value['SoLuong'];
                $DonGia = $value['product_price'];
                $MaHD = $data_mahd['order_id'];
                $query_ct = "INSERT INTO tbl_order_details(order_id,product_id,product_num,product_price) VALUES ($MaHD,$MaSP,$SoLuong,$DonGia)";
        
                $status_ct = $this->conn->query($query_ct);
            }
            
            if ($status == true and $status_ct = true) {
                header('location: ?act=checkout&xuli=done');
                unset($_SESSION['cartb']);
            }
        }
    }
?>
