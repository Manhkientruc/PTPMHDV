<?php
  $sql_sua_menu3 = "SELECT * FROM tbl_menu3 WHERE id_menu3='$_GET[idmenu3]' LIMIT 1";
  $query_sua_menu3 = mysqli_query($conn, $sql_sua_menu3);
?>
<p>Sửa Menu</p>
<table border="1" width="50%">
<?php
  while ($row = mysqli_fetch_array($query_sua_menu3)) {
?>
  <form method="POST" action="modules/ban3/xuly.php?idmenu3=<?php echo $row['id_menu3'] ?>" enctype="multipart/form-data">
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
      <th><input type="submit" name="suamenu3" value="Sửa"></th>
    </tr>
  </form>
  <?php
  }
  ?>
</table>