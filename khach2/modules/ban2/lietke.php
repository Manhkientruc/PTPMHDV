<?php
  $sql_lietke_menu2 = "SELECT * FROM tbl_menu2";
  $query_lietke_menu2 = mysqli_query($conn, $sql_lietke_menu2);
?>
<p><b>Hiện thị danh sách đồ đã đặt</b></p>
<table style="width:100%" border="1">
    <tr>
        <th>Số thứ tự</th>
        <th>Đồ ăn</th>
        <th>Đồ uống</th>
        <th>Đồ ăn nhẹ</th>
        <th>Đồ tráng miệng</th>
    </tr>
    <?php
        $i = 0;
        while($row = mysqli_fetch_array($query_lietke_menu2)){
            $i++;
    ?>
    <tr>
        <th><?php echo $i ?></th>
        <th><?php echo $row['doan'] ?></th>
        <th><?php echo $row['douong'] ?></th>
        <th><?php echo $row['doannhe'] ?></th>
        <th><?php echo $row['dotrangmieng'] ?></th>
        <th>
            <a href="modules/ban2/xuly.php?idmenu2=<?php echo $row['id_menu2'] ?>">Xóa</a>
            <a href="?action=ban2&query=sua&idmenu2=<?php echo $row['id_menu2'] ?>">Sửa</a>
        </th>
    </tr>
    <?php
        }
    ?>
</table>