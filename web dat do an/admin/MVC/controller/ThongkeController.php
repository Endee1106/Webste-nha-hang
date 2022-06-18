<?php
    require_once("MVC/models/thongke.php");
    class ThongkeController {
        var $tk_model;
        public function __construct()
        {
            $this->tk_model = new thongke();            
        }
        function sp(){
            $data = $this->tk_model->tksp();
            $countnv = $this->tk_model->coutnv();
            $countorder= $this->tk_model->coutorder();
            $doanhthu= $this->tk_model->doanhthu();
            $lines = $this->tk_model->getLine();
            require_once('MVC/index.php');
        }
        function show() {
            require_once('MVC/index.php');
        }
        }
    
?>