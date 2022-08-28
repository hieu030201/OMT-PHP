<?php
    include_once('./views/admin/templates/header.php');
?>
<h1>Thêm danh mục sản phẩm</h1>
<form action="index.php?controller=category&action=store" method="POST" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-5">
      <input type="text" class="form-control" id="inputEmail4" name="cat_name" placeholder="Tên danh mục">
    </div>
    <div class="input-group mb-3">
    <div class="input-group-prepend">
        <label class="input-group-text" for="inputGroupSelect01">Nhóm danh mục</label>
    </div>
    <select name="parent_id" value="" class="custom-select col-md-4" id="inputGroupSelect01">
        <option  selected>Choose...</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>
    </div>
  <button type="submit" value="submit" class="btn btn-primary">Thêm</button>
</form>
<?php
    include_once('./views/admin/templates/footer.php');
?>
