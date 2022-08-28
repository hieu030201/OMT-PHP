<?php
    include_once('./views/admin/templates/header.php');
?>
<h1>Thêm danh mục sản phẩm</h1>
<form action="index.php?controller=post&action=update" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleFormControlInput1">Tiêu đề</label>
        <input name="title" value="<?= $posts['title'];?>" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nhập tiêu đề">
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect2">Chọn danh mục bài viết</label>
        <select name="category_id" value="<?= $posts['category_id'];?>" multiple class="form-control" id="exampleFormControlSelect2">
        <option class="active"><?= $posts['category_id'];?></option>
        <?php
        foreach($categoryAll as $category){
                    ?>
                    <option value="<?php echo $category['id'];?>"><?php echo $category['cat_name']?></option>
                    <?php
                }
        ?>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">Nhập ảnh bài viết</label>
        <input name="avatar" value="<?= $posts['img'];?>" type="file" class="form-control-file" id="exampleFormControlFile1">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Example textarea</label>
        <textarea name="description" value="<?= $posts['description'];?>" class="form-control" id="exampleFormControlTextarea1" rows="3"><?= $posts['description'];?></textarea>
    </div>
    <button type="submit" value="submit" class="btn btn-primary">Thêm</button>
</form>
<?php
    include_once('./views/admin/templates/footer.php');
?>
