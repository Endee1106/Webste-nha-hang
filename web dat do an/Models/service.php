<?php
    require_once('model.php');
    class service extends model {
        function getService() {
            $sql = "SELECT * FROM tbl_images ORDER BY id DESC";
            $rs = $this->conn->query($sql);
            $data = array();
            while($row = $rs->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
    }
?>
