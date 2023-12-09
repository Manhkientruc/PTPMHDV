<?php
  $sql_lietke_menu1 = "SELECT * FROM tbl_menu1";
  $query_lietke_menu1 = mysqli_query($conn, $sql_lietke_menu1);
?>
<p><b>Bàn 1</b></p>
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
    </tr>
    <?php
        }
    ?>
</table>
<br><br><br>
<?php
  $sql_lietke_menu2 = "SELECT * FROM tbl_menu2";
  $query_lietke_menu2 = mysqli_query($conn, $sql_lietke_menu2);
?>
<p><b>Bàn 2</b></p>
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
    </tr>
    <?php
        }
    ?>
</table>
<br><br><br>
<?php
  $sql_lietke_menu3 = "SELECT * FROM tbl_menu3";
  $query_lietke_menu3 = mysqli_query($conn, $sql_lietke_menu3);
?>
<p><b>Bàn 3</b></p>
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
    </tr>
    <?php
        }
    ?>
</table>
<br><br><br>
<?php
  $sql_lietke_menu4 = "SELECT * FROM tbl_menu4";
  $query_lietke_menu4 = mysqli_query($conn, $sql_lietke_menu4);
?>
<p><b>Bàn 4</b></p>
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
    </tr>
    <?php
        }
    ?>
</table>