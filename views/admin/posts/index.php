<?php
    include_once('./views/admin/templates/header.php');
?>
    <h3>DANH SÁCH Category</h3>
    <a href="index.php?controller=post&action=new"><button class="button1">Thêm bài viết</button></a>
    <table class="table" style="font-size: 18px">
  <thea style="font-size: 18px;"d>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">User Post</th>
      <th scope="col">Category</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      
    </tr>
  </thea>
  <tbody>
    <?php foreach($posts as $post){

    ?>
    <tr>
      <td><?= $post['id'];?></td>
      <td><?= $post['user_name'];?></td>
      <td><?= $post['category_id'];?></td>
      <td><?= $post['title'];?></td>
      <td><?= $post['description'];?></td>
      <td><?= $post['img'];?></td>
      <td>
            <a href="index.php?controller=post&action=edit&id=<?php echo $post["id"]?>"><button type="button" class="btn btn-info">Sửa</button></a>
            | 
            <a href="index.php?controller=post&action=delete&id=<?php echo $post["id"]?>"><button type="button" class="btn btn-danger">Xóa</button></a>
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