<?php
    require_once("model.php");
    class order extends Model {
        function chuaXuLy(){
            $sql = "SELECT * from tbl_order where order_status = 1";
            $rs = $this->conn->query($sql);
            $data = array();
            while($row = $rs->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
        function dangChuaXuLy(){
            $sql = "SELECT * from tbl_order where order_status = 2";
            $rs = $this->conn->query($sql);
            $data = array();
            while($row = $rs->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
        function daXuLy(){
            $sql = "SELECT * from tbl_order where order_status = 3";
            $rs = $this->conn->query($sql);
            $data = array();
            while($row = $rs->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
        function huy(){
            $sql = "SELECT * from tbl_order where order_status = 4";
            $rs = $this->conn->query($sql);
            $data = array();
            while($row = $rs->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }

        function find($id) {
            $sql = "SELECT * from tbl_order  where order_id = $id";
            $rs = $this->conn->query($sql);
            $data = array();
            while($row = $rs->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }

        function update($id, $status) {
            $sql = "UPDATE tbl_order set order_status= $status where order_id=$id";
            $rs = $this->conn->query($sql);
            header("location: ?act=order");
        }
    }
?>