<?php
    include_once('./views/admin/templates/header.php');
?>
<h1>Thêm danh mục sản phẩm</h1>
<form action="index.php?controller=blog&action=store" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleFormControlInput1">Tiêu đề</label>
        <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nhập tiêu đề">
    </div>
    <div class="input-group mb-3">
        <select  class="custom-select" id="inputGroupSelect02">
       
        </select>
        <div class="input-group-append">
            <label class="input-group-text" for="inputGroupSelect02">Options</label>
        </div>
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">Nhập ảnh bài viết</label>
        <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Example textarea</label>
        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <button type="submit" value="submit" class="btn btn-primary">Thêm</button>
</form>
<?php
    include_once('./views/admin/templates/footer.php');
?>
