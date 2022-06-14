<?php
    require_once('model.php');
    class detail extends model {
        function getDetail($id) {
            $queryDetail = "SELECT * FROM tbl_product WHERE product_id = $id";
            $rs = $this->conn->query($queryDetail);
            $data = array();
            while($row = $rs->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }

        function getProductByCate($loai) {
            $queryDetail = "SELECT * FROM tbl_product WHERE category_id = $loai ORDER BY RAND() LIMIT 4";
            $rs = $this->conn->query($queryDetail);
            $data = array();
            while($row = $rs->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }

        function getImages($id) {
            $queryDetail = "SELECT * FROM tbl_subimageproduct WHERE idProduct = $id";
            $rs = $this->conn->query($queryDetail);
            $data = array();
            while($row = $rs->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
    }
?>
