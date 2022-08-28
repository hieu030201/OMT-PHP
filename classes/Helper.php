<?php
    class Helper{
        static function getRequestParam($paraName){
            if(isset($_REQUEST[$paraName]))
                return $_REQUEST[$paraName];
            return "";
        }
    }
?>