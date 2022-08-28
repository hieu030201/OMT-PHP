<?php
class BaseController{
    const VIEW_FOLDER_NAME = 'Views';
    const MODEL_FOLDER_NAME = 'Models';
    /**
     * Description:
     * path name: folder.file.name
     * Lấy từ sau thư mục View
     */
    
    protected function view($viewPath, array $data =[]){
        //lấy ra key và value của mảng data
        // và tạo ra biến $key vd $key= category=>$$key =$category
        foreach($data as $key=>$value){
            $$key = $value;
        }
        //để dùng dc const trong class chúng la dùng self
        require( self::VIEW_FOLDER_NAME . '/' . str_replace('.','/',$viewPath).'.php');
    }
    
    protected function loadModel($modelPath)
    {
        require(self::MODEL_FOLDER_NAME . '/' .$modelPath . '.php');
    }
}
?>