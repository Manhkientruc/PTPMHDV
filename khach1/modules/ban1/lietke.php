<?php
  $sql_lietke_menu1 = "SELECT * FROM tbl_menu1";
  $query_lietke_menu1 = mysqli_query($conn, $sql_lietke_menu1);
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
        while($row = mysqli_fetch_array($query_lietke_menu1)){
            $i++;
    ?>
    <tr>
        <th><?php echo $i ?></th>
        <th><?php echo $row['doan'] ?></th>
        <th><?php echo $row['douong'] ?></th>
        <th><?php echo $row['doannhe'] ?></th>
        <th><?php echo $row['dotrangmieng'] ?></th>
        <th>
            <a href="modules/ban1/xuly.php?idmenu1=<?php echo $row['id_menu1'] ?>">Xóa</a>
            <a href="?action=ban1&query=sua&idmenu1=<?php echo $row['id_menu1'] ?>">Sửa</a>
        </th>
    </tr>
    <?php
        }
    ?>
</table>