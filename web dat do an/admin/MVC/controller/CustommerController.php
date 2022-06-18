<?php
require_once("MVC/models/customer.php");
class CustommerController {
    var $cus_control;
    public function __construct()
    {
        $this->cus_control = new customer();            
    }
    public function list()
    {
        $data = $this->cus_control->list_custom();
        
        require_once('MVC/index.php');
    }
    public function see_info()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data = $this->cus_control->see($id);
   

        require_once('MVC/index.php');
        //require_once("MVC/Views/authors/edit.php");
    }
    function controller() {
        require_once('MVC/index.php');
    }
}

?>