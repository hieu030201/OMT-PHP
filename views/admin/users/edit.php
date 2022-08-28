<?php
    include_once('./views/admin/templates/header.php');
?>
<h1>Thêm User</h1>
<form action="index.php?controller=user&action=update" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleFormControlInput1">Họ và tên</label>
        <input name="fullname" value="<?= $users['fullname'];?>" type="text" class="form-control" id="exampleFormControlInput1" placeholder="họ và tên">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Tên đăng nhập</label>
        <input name="username" value="<?php echo $users['username'];?>" type="text" class="form-control" id="exampleFormControlInput1" placeholder="tên đăng nhập">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Password</label>
        <input name="password" value="<?php echo $users['password'];?>" type="password" class="form-control" id="exampleFormControlInput1" placeholder="password">
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">Ảnh đại diện</label>
        <input type="file" name="avatar" value="<?php echo $users['avatar'];?>" class="form-control-file" id="exampleFormControlFile1">
    </div>
    <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" name="level" value="0" <?php echo $users['level']?"checked":"";?> " id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
    <label class="custom-control-label" for="customRadioInline1"><p style="margin-left:20px;">Tác giả</p></label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" name="level" value="1" <?php echo $users['level']?"checked":"";?> id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
    <label class="custom-control-label" for="customRadioInline2"><p style="margin-left:20px;">Admin</p></label>
    </div>
    <br>
    <button type="submit" value="submit" class="btn btn-primary">Thêm</button>
</form>
<?php
    include_once('./views/admin/templates/footer.php');
?>
