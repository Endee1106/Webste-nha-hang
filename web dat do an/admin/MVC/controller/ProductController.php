<?php
    require_once("MVC/models/product.php");
    class ProductController {
        var $product_model;
        public function __construct()
        {
            $this->product_model = new product();            
        }
        function list(){
            $data = $this->product_model->list_pro();
            require_once('MVC/index.php');
        }
        public function add()
        {
            $data_dm = $this->product_model->danhmuc();
            require_once('MVC/index.php');
        }
        public function store()
        {
            $data = array(
                'category_id' => $_POST['DM'],
                'product_name'  =>   $_POST['TenSP'],
                'product_price' => $_POST['gia'],
                'product_image' => $_POST['hinhanh'],
                'product_desc' =>  $_POST['mota'],
                'product_content' =>  $_POST['chude'],
         
            );
            foreach ($data as $key => $value) {
                if (strpos($value, "'") != false) {
                    $value = str_replace("'", "\'", $value);
                    $data[$key] = $value;
                }
            }
    
            $this->product_model->add($data);
        }
        public function edit()
        {
            $id = isset($_GET['id']) ? $_GET['id'] : 1;
            $data_dm = $this->product_model->danhmuc();
            $data = $this->product_model->find($id);
            require_once('MVC/index.php');
        }
        public function update()
        {
            $id = $_POST['id'];
            $data = array(
                'category_id' => $_POST['DM'],
                'product_name'  => $_POST['TenSP'],
                'product_status'  => $_POST['status'],
                'product_price' => $_POST['gia'],
                'product_desc' =>  $_POST['mota'],
                'product_content' =>  $_POST['chude'],
         
            );
            foreach ($data as $key => $value) {
                if (strpos($value, "'") != false) {
                    $value = str_replace("'", "\'", $value);
                    $data[$key] = $value;
                }
            }
            $this->product_model->update($id,$data);
        }
        public function delete()
        {
            $id = $_GET['id'];
            $data =  $this->product_model->delete($id);
            require_once('MVC/Views/product/list_product.php');
        }
        function home() {
            require_once('MVC/Views/product/list_product.php');
        }
    }
?>