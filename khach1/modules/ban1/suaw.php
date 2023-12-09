<?php
  $sql_sua_menu1 = "SELECT * FROM tbl_menu1 WHERE id_menu1='$_GET[idmenu1]' LIMIT 1";
  $query_sua_menu1 = mysqli_query($conn, $sql_sua_menu1);
?>
<p>Sửa Menu</p>
<table border="1" width="50%">
<?php
  while ($row = mysqli_fetch_array($query_sua_menu1)) {
?>
  <form method="POST" action="modules/ban1/xuly.php?idmenu1=<?php echo $row['id_menu1'] ?>" enctype="multipart/form-data">
    <tr>
      <th>Đồ ăn</th>
      <th><input type="text" value = "<?php echo $row['doan'] ?>" name="doan"></th>
    </tr>
    <tr>
      <th>Đồ uống</th>
      <th><input type="text" value = "<?php echo $row['douong'] ?>" name="douong"></th>
    </tr>
    <tr>
      <th>Đồ ăn nhẹ</th>
      <th><input type="text" value = "<?php echo $row['doannhe'] ?>" name="doannhe"></th>
    </tr>
    <tr>
      <th>Đồ tráng miệng</th>
      <th><input type="text" value = "<?php echo $row['dotrangmieng'] ?>" name="dotrangmieng"></th>
    </tr>
    <tr>
      <th><input type="submit" name="suamenu1" value="Sửa"></th>
    </tr>
  </form>
  <?php
  }
  ?>
</table>