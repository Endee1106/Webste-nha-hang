<?php
    require_once('Models/info.php');
    class InfoController {
        var $info_model;
        public function __construct() {
            $this->info_model = new info();
        }
        function show() {
            require_once('Views/index.php');
        }
        function info() { 
            $data = $this->info_model->account();
            require_once('Views/index.php');
        }
        function update(){
        if (isset($_POST['submit'])) {
            $data = array(
                'name' =>    $_POST['firstname'],
                'user_sex' => $_POST['GioiTinh'],
                'user_tel' => $_POST['SDT'],
                'user_email' =>    $_POST['mail'],
                'user_address'  =>   $_POST['course'],
            );
            foreach ($data as $key => $value) {
                if (strpos($value, "'") != false) {
                    $value = str_replace("'", "\'", $value);
                    $data[$key] = $value;
                }
            }
            $this->info_model->update_account($data);
        }
        header('location: ?act=info&xuli=join');
    }
        }
    
?>