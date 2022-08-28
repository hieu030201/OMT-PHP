<?php
    include_once('./views/admin/templates/header.php');
?>
   
    <h3>DANH SÁCH Category</h3>
    <a href="index.php?controller=user&action=new"><button class="button1">Thêm User</button></a>
    <table class="table"  style="font-size: 18px;margin-top:30px;">
  <thead style="font-size: 18px;">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Ảnh</th>
      <th scope="col">FullName</th>
      <th scope="col">Username</th>
      <th scope="col">Level</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($users as $user){
    ?>
    <tr>
      <td><?= $user['id'];?></td>
      <td><img src="./uploads/avatar/<?= $user['avatar']?>"></td>
      <td><?= $user['fullname'];?></td>
      <td><?= $user['username'];?></td>
      <td><?= $user['level']?"Tác giả":"Admin"?></td>
      <td>
            <a href="index.php?controller=user&action=edit&id=<?php echo $user["id"]?>"><button type="button" class="btn btn-info">Sửa</button></a>
            | 
            <a onclick='confirm("Are you sure!")' href="index.php?controller=user&action=delete&id=<?php echo $user["id"]?>"><button type="button" class="btn btn-danger">Xóa</button></a>
        </td>
    </tr>
    <?php
      }
    ?>
  </tbody>
</table>

<?php
    include_once('./views/admin/templates/footer.php');
?>