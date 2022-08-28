<?php
session_start();
class BlogController extends BaseController
{
    //khi 2 method chạy độc lập mà muốn khai báo 1 lần cv thì dùng construct(hàm ktao)
    //nhược điểm là load dư thừa
    private $blogModel;
    private $categoryModel;
    private $userModel;
    public function __construct()
    {
        $this->loadModel('BlogModel');
        $this->loadModel('CategoryModel');
        $this->loadModel('UserModel');
        $this->userModel = new UserModel;
        $this->blogModel = new BlogModel;
        $this->categoryModel = new CategoryModel;
    }
    public function index(){
        return $this->view('admin.blogs.index',['blogs'=>$blogs]);
    }
    public function new(){
        $selectColumns=['*'];
        $order=[
            'column'=>'id', 
            'order'=>'desc',
        ];
        $categories = $this->categoryModel->getAll($selectColumns,$order);
        return $this->view('admin.blogs.new',['categories'=>$categories]);
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
            'title' => $_REQUEST['title'],
            'img' => $path,
            'description' => $_REQUEST['description'],
        ];
        
        $this->blogModel->store($data);
    }

    // public function edit(){
    //     $id = $_GET['id'];
    //     if($id=="")
    //         return "";
    //     $posts = $this->postModel;
    //     $categories = $this->categoryModel;
    //     return $this->view('admin.posts.edit',['posts'=>$posts,'categories'=>$categories]);
    // }
    
    // public function update()
    // {
    //     $id = $_GET['id'];
    //     $data = [
    //         'cat_name' => $_REQUEST['user_id'],
    //         'category_id' => $_REQUEST['category_id'],
    //         'img' => $_REQUEST['img'],
    //         'title ' => $_REQUEST['title '],
    //         'description' => $_REQUEST['description'],
    //     ];
    //     return $this->postModel->updateData($id,$data);
    // }

    // public function delete(){
    //     $id = $_GET['id'];
    //     $this->postModel->destroy($id);
    //     echo "xoa thanh cong";
    // }
}
?>