<?php
    require_once("MVC/models/order.php");
    class OrderController {
        var $order_model;
        public function __construct() {
            $this->order_model = new order();            
        }
        
        function list(){
                $chuaXuLy = $this->order_model->chuaXuLy();
                $dangChuaXuLy = $this->order_model->dangChuaXuLy();
                $daXuLy= $this->order_model->daXuLy();
                $huy= $this->order_model->huy();
                require_once('MVC/index.php');
        }

        function chuaXuLy() {
                $chua = $this->order_model->chuaXuLy();
                require_once('MVC/index.php');
        }
        function dangChuaXuLy() {
                $dangChua = $this->order_model->dangChuaXuLy();
                require_once('MVC/index.php');
        }
        function daXuLy() {
                $da = $this->order_model->daXuLy();
                require_once('MVC/index.php');
        }
        function huy() {
                $huy = $this->order_model->huy();
                require_once('MVC/index.php');
        }
        function show() {
                $id = $_GET['id'];
                $find = $this->order_model->find($id);
                require_once('MVC/index.php');
        }

        function update() {
                $id = $_POST['id'];
                $status = $_POST['status'];
                $this->order_model->update($id,$status);
        }
}
    
?>