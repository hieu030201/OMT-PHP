<?php
    class Controller{
        function __construct()
        {
            
        }
        protected function view($viewName,$data){
            $arr = explode(".",$viewName);
            $fileName = BASE_DIR."views/".$arr[0]."/".$arr[1].".php";
            if(file_exists($fileName)){
                extract($data);//chuyen mang thanh bien
                include_once($fileName);
            }else
                include_once(BASE_DIR."views/404.php");
        }
    }
?>