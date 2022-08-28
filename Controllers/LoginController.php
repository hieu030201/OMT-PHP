<?php

class Logintroller extends BaseController
{
    private $userModel;
    public function __construct()
    {
        $this->loadModel('UserModel');
        $this->userModel = new UserModel;
    }
    public function login(){
        if(isset($_POST['username']) && isset($_POST['password'])){
            function validate($data){
                $data=trim($data);
                $data= stripslashes($data);
                $data=htmlspecialchars($data);
                return $data;
            }
            $username = validate($_POST['username']);
            $pass = validate($_POST['password']);
            if(empty($username)){
                header("Location: ../views/admin/index.php?error=User Name is required");
                exit();
            }else if(empty($password)){
                header("Location: ../views/admin/index.php?error=Password Name is required");
                exit();
            }
        }
    }
}
?>