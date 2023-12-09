<?php
  $sql_lietke_menu3 = "SELECT * FROM tbl_menu3";
  $query_lietke_menu3 = mysqli_query($conn, $sql_lietke_menu3);
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
        while($row = mysqli_fetch_array($query_lietke_menu3)){
            $i++;
    ?>
    <tr>
        <th><?php echo $i ?></th>
        <th><?php echo $row['doan'] ?></th>
        <th><?php echo $row['douong'] ?></th>
        <th><?php echo $row['doannhe'] ?></th>
        <th><?php echo $row['dotrangmieng'] ?></th>
        <th>
            <a href="modules/ban3/xuly.php?idmenu3=<?php echo $row['id_menu3'] ?>">Xóa</a>
            <a href="?action=ban3&query=sua&idmenu3=<?php echo $row['id_menu3'] ?>">Sửa</a>
        </th>
    </tr>
    <?php
        }
    ?>
</table>