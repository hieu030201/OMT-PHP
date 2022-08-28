<?php
session_start();
class PostController extends BaseController
{
    //khi 2 method chạy độc lập mà muốn khai báo 1 lần cv thì dùng construct(hàm ktao)
    //nhược điểm là load dư thừa
    private $postModel;
    private $categoryModel;
    private $userModel;
    public function __construct()
    {
        $this->loadModel('PostModel');
        $this->loadModel('CategoryModel');
        $this->loadModel('UserModel');
        $this->userModel = new UserModel;
        $this->postModel = new PostModel;
        $this->categoryModel = new CategoryModel;
    }
    public function index(){
        $selectColumns=['*'];
        $order=[
            'column'=>'id', 
            'order'=>'desc',
        ];
        $posts = $this->postModel->getAll($selectColumns,$order);
        return $this->view('admin.posts.index',['posts'=>$posts]);
    }
    public function new(){
        $selectColumns=['*'];
        $order=[
            'column'=>'id', 
            'order'=>'desc',
        ];
        $categories = $this->categoryModel->getAll($selectColumns,$order);
        return $this->view('admin.posts.new',['categories'=>$categories]);
    }

    public function store()
    {
        $path= basename($_FILES['img']['name']);
        $target = "./uploads/avatar/";
        $image_target = $target.$path;
        if(isset($_FILES['img']))
            move_uploaded_file($_FILES['img']['tmp_name'], $image_target);
        $name = $_SESSION['username'];
        // $id = $this->userModel->findByUsername($name);
        $data = [
            'user_name' => $name,
            'category_id' => $_REQUEST['category_id'],
            'title' => $_REQUEST['title'],
            'img' => $path,
            'description' => $_REQUEST['description'],
        ];
        
        $this->postModel->store($data);
        return $this->index();
    }

    public function edit(){
        $id = $_GET['id'];
        if($id=="")
            return "";
        $posts = $this->postModel->findById($id);
        $categories = $this->categoryModel->findById($id);
        $selectColumns=['*'];
        $order=[
            'column'=>'id', 
            'order'=>'desc',
        ];
        $categoryAll = $this->categoryModel->getAll($selectColumns,$order);
        return $this->view('admin.posts.edit',['posts'=>$posts,'categories'=>$categories,'categoryAll'=>$categoryAll]);
    }
    
    public function update()
    {
        
        $path= basename($_FILES['img']['name']);
        $target = "./uploads/avatar/";
        $image_target = $target.$path;
        if(isset($_FILES['img']))
            move_uploaded_file($_FILES['img']['tmp_name'], $image_target);
        $name = $_SESSION['username'];
        // $id = $this->userModel->findByUsername($name);
        $data = [
            'user_name' => $name,
            'category_id' => $_REQUEST['category_id'],
            'title' => $_REQUEST['title'],
            'img' => $path,
            'description' => $_REQUEST['description'],
        ];
        $id = $_GET['id'];
        $this->postModel->updateData($id,$data);
    }

    public function delete(){
        $id = $_GET['id'];
        $this->postModel->destroy($id);
        echo "xoa thanh cong";
    }
}
?>