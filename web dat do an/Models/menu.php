<?php
    require_once('model.php');
    class menu extends model {
        function getAllProduct($condition) {
            $sp_tungtrang = 15;
            if(!isset($_GET['page'])) {
                $trang = 1;
            } else {
                $trang = $_GET['page'];
            }
            if($condition == "") {
                $condition = "WHERE product_status = 1";
            } else {
                $condition = "WHERE product_status = 1 ".$condition;
            }
    
            $tung_trang = ($trang-1) * $sp_tungtrang;
            $query = "SELECT * FROM tbl_product $condition LIMIT $tung_trang,$sp_tungtrang";
            $rs = $this->conn->query($query);
            $data = array();
            while($row = $rs->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }

        function getPag() {
            $queryAllProduct = "SELECT * FROM tbl_product WHERE product_status = 1";
            $rs = $this->conn->query($queryAllProduct);
            $data = array();
            while($row = $rs->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }

        function getProductByCategory($loai) {
            $queryAllProduct = "SELECT * FROM tbl_product WHERE category_id = $loai AND product_status = 1";
            $rs = $this->conn->query($queryAllProduct);
            $data = array();
            while($row = $rs->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }

        function getCategories() {
            $queryAllCategories = 'SELECT * FROM tbl_category_product';
            $rs = $this->conn->query($queryAllCategories);
            $data = array();
            while($row = $rs->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }

        function getLatest() {
            $queryLatest = "SELECT * FROM tbl_product WHERE product_status = 1 ORDER BY product_id DESC LIMIT 5";
            $rs = $this->conn->query($queryLatest);
            $data = array();
            while($row = $rs->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
    }
?>
