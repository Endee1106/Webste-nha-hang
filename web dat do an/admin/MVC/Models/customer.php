<?php
require_once("model.php");
class customer extends Model
{
    var $table = "tbl_user";
    var $contens = "user_id";
    function list_custom(){
       
        $sql = 'SELECT * FROM tbl_user  ';
        $rs = $this->conn->query($sql);
        $data = array();
        while($row = $rs->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    function see($id)
    {
        $query = "select * from $this->table where $this->contens =$id";
        return $this->conn->query($query)->fetch_assoc();
    }
}
?>