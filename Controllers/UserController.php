<?php

class UserController extends BaseController
{
    //khi 2 method chạy độc lập mà muốn khai báo 1 lần cv thì dùng construct(hàm ktao)
    //nhược điểm là load dư thừa
    private $userModel;
    public function __construct()
    {
        $this->loadModel('UserModel');
        $this->userModel = new UserModel;
    }
    public function index(){
        $selectColumns=['*'];
        $order=[
            'column'=>'id', 
            'order'=>'desc',
        ];
        $users = $this->userModel->getAll($selectColumns,$order);
        return $this->view('admin.users.index',['users'=>$users]);
    }
    
    public function new(){
        return $this->view('admin.users.new');
    }

    public function store()
    {
        $path= basename($_FILES['avatar']['name']);
        $target = "./uploads/avatar/";
        $image_target = $target.$path;
        if(isset($_FILES['avatar']))
				move_uploaded_file($_FILES['avatar']['tmp_name'], $image_target);
        $data = [
            'fullname' => $_REQUEST['fullname'],
            'username' => $_REQUEST['username'],
            'password' => $_REQUEST['password'],
            'avatar'=> $path,
            'level' => $_REQUEST['level'],
        ];
        
        $this->userModel->store($data);
        return $this->index();
    }

    public function edit(){
        $id = $_GET['id'];
        if($id=="")
            return "";
        $users = $this->userModel->findById($id);
        return $this->view('admin.users.edit',['users'=>$users]);
    }
    
    public function update()
    {
        $path= basename($_FILES['avatar']['name']);
        $target = "./uploads/avatar/";
        $image_target = $target.$path;
        if(isset($_FILES['avatar']))
				move_uploaded_file($_FILES['avatar']['tmp_name'], $image_target);
        $data = [
            'fullname' => $_REQUEST['fullname'],
            'username' => $_REQUEST['username'],
            'password' => $_REQUEST['password'],
            'avatar'=> $path,
            'level' => $_REQUEST['level'],
        ];
        $id = $_GET['id'];
        $this->userModel->updateData($id,$data);
    }

    public function delete(){
        $id = $_GET['id'];
        $this->userModel->destroy($id);
        return $this->index();
    }

    public function show()
    {
        $id = $_GET['id'];
        $users = $this->userModel->findById($id);
        return $users;
    }
}
?>