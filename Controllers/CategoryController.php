<?php

class CategoryController extends BaseController
{
    //khi 2 method chạy độc lập mà muốn khai báo 1 lần cv thì dùng construct(hàm ktao)
    //nhược điểm là load dư thừa
    private $categoryModel;
    private $postModel;
    public function __construct()
    {
        $this->loadModel('CategoryModel');
        $this->loadModel('PostModel');
        $this->categoryModel = new CategoryModel;
        $this->postModel = new PostModel;
    }
    public function index(){
        $selectColumns=['id','cat_name','parent_id'];
        $order=[
            'column'=>'id', 
            'order'=>'desc',
        ];
        $categories = $this->categoryModel->getAll($selectColumns,$order);
        return $this->view('admin.categories.index',['categories'=>$categories]);
    }
    public function new(){
        return $this->view('admin.categories.new');
    }

    public function store()
    {
        $data = [
            'cat_name' => $_REQUEST['cat_name'],
            'parent_id' => $_REQUEST['parent_id'],
        ];
        $this->categoryModel->store($data);
    }
    
    public function update()
    {
        $id = $_GET['id'];
        $data = ['cat_name'=>'aac'];  
        $this->categoryModel->updateData($id,$data);
    }

    public function delete(){
        $id = $_GET['id'];
        $this->categoryModel->destroy($id);
        echo "xoa thanh cong";
    }
    
}
?>