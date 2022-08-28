<?php
    include_once('./views/admin/templates/header.php');
?>
    <h3>DANH SÁCH Category</h3>
    <a href="index.php?controller=category&action=new">Thêm sinh viên </a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID</th>
      <th scope="col">Category</th>
      <th scope="col">Parent_Id</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($categories as $category){

    ?>
    <tr>
      <th scope="row"></th>
      <td><?= $category['id'];?></td>
      <td><?= $category['cat_name'];?></td>
      <td><?= $category["parent_id"];?></td>
      <td>
            <a href="index.php?controller=category&action=edit&id=<?php echo $category["id"]?>"><button type="button" class="btn btn-info">Sửa</button></a>
            | 
            <a href="index.php?controller=category&action=delete&id=<?php echo $category["id"]?>"><button type="button" class="btn btn-danger">Xóa</button></a>
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