<?php
   require_once("connection.php");
    class model {
        var $conn;
        function __construct(){
            $conn_obj = new connection();
            $this->conn = $conn_obj->conn;
        }
    }
?>

