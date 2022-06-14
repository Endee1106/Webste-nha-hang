<?php
    require_once('model.php');
    class home extends model {
        function getList() {
            $queryAllProduct = "SELECT * FROM tbl_product";
            $rs = $this->conn->query($queryAllProduct);
            $data = array();
            while($row = $rs->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }

        function getTop4() {
            $getTop = "SELECT * FROM tbl_product WHERE product_id IN
            (SELECT product_id FROM tbl_order_details WHERE product_num in
            (SELECT SUM(product_num) as dem FROM tbl_order_details GROUP BY product_id ORDER BY dem DESC))";
             $rs = $this->conn->query($getTop);
             $data = array();
             while($row = $rs->fetch_assoc()) {
                 $data[] = $row;
             }
             return $data;
        }
    }
?>
