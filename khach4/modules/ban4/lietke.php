<?php
  $sql_lietke_menu4 = "SELECT * FROM tbl_menu4";
  $query_lietke_menu4 = mysqli_query($conn, $sql_lietke_menu4);
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
        while($row = mysqli_fetch_array($query_lietke_menu4)){
            $i++;
    ?>
    <tr>
        <th><?php echo $i ?></th>
        <th><?php echo $row['doan'] ?></th>
        <th><?php echo $row['douong'] ?></th>
        <th><?php echo $row['doannhe'] ?></th>
        <th><?php echo $row['dotrangmieng'] ?></th>
        <th>
            <a href="modules/ban4/xuly.php?idmenu4=<?php echo $row['id_menu4'] ?>">Xóa</a>
            <a href="?action=ban4&query=sua&idmenu4=<?php echo $row['id_menu4'] ?>">Sửa</a>
        </th>
    </tr>
    <?php
        }
    ?>
</table>