<?php
require_once("model.php");
class product extends Model
{
    var $conn;
    var $table = "tbl_product";
    var $contens = "product_id";
    function list_pro(){
        $sql = 'SELECT * FROM tbl_product  ';
        $rs = $this->conn->query($sql);
        $data = array();
        while($row = $rs->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    function danhmuc(){
        $sql = "select * from tbl_category_product ";
        $rs = $this->conn->query($sql);
        $data = array();
        while($row = $rs->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    function add($data){
        $f = "";
        $v = "";
        foreach ($data as $key => $value) {
            $f .= $key . ",";
            $v .= "'" . $value . "',";
        }
        $f = trim($f, ",");
        $v = trim($v, ",");
        $query = "INSERT INTO $this->table($f) VALUES ($v);";

        $status = $this->conn->query($query);

        if ($status == true) {
            setcookie('msg', 'Thêm mới thành công', time() + 2);
            header("location: ?act=product&xuli=join");
        } else {
            setcookie('msg', 'Thêm vào không thành công', time() + 2);
            header("location: ?act=product&xuli=add");
        }
    }
    
    function find($id)
    {
        $query = "select * from $this->table where $this->contens =$id";
        return $this->conn->query($query)->fetch_assoc();
    }
    function update($id,$data)
    {
        $v = "";
        foreach ($data as $key => $value) {
            $v .= $key . "='" . $value . "',";
        }
        $v = trim($v, ",");


        $query = "UPDATE $this->table SET  $v   WHERE $this->contens = $id";

        $result = $this->conn->query($query);
        
        if ($result == true) {
            header("location: ?act=product&xuli=join");
        } else {
            setcookie('msg', 'Update vào không thành công', time() + 2);
            header("location: ?act=product&xuli=update");
        }
    }
    function delete($id)
    {
        $query = 'DELETE * from tbl_product where product_id=$id';
        
        $status = $this->conn->query($query);
        if ($status == true) {
            setcookie('msg', 'Xóa thành công', time() + 2);
        } else {
            setcookie('msg', 'Xóa không thành công', time() + 2);
        }
        header("location: ?act=product&xuli=join");
    }
}
?>