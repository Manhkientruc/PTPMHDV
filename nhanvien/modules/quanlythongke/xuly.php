<?php
    include('../../config/config.php');
    $doan = $_POST['doan'];
    $douong = $_POST['douong'];
    $doannhe = $_POST['doannhe'];
    $dotrangmieng = $_POST['dotrangmieng'];

    if(isset($_POST['themmenu1'])){
        $sql_them = "INSERT INTO tbl_menu1(doan, douong, doannhe, dotrangmieng)
            VALUE('".$doan."','".$douong."','".$doannhe."','".$dotrangmieng."')";
        mysqli_query($conn, $sql_them);
        header('Location:../../index.php?action=quanlythongke&query=them');
    }
    elseif(isset($_POST['suamenu1'])){

        $sql_update = "UPDATE tbl_menu1 SET doan='".$doan."', douong='".$douong."',doannhe='".$doannhe."',dotrangmieng='".$dotrangmieng."'
            WHERE id_menu1='$_GET[idmenu1]'";

        $sql = "SELECT * FROM tbl_menu1 WHERE id_menu1 = '$_GET[idmenu1]' LIMIT 1";
        $query = mysqli_query($conn, $sql);
        mysqli_query($conn, $sql_update);
        header('Location:../../index.php?action=quanlythongke&query=them');
    }
    else{
        $id=$_GET['idmenu1'];
        $sql = "SELECT * FROM tbl_menu1 WHERE id_menu1 = '$id' LIMIT 1";
        $query = mysqli_query($conn, $sql);
        $sql_xoa = "DELETE FROM tbl_menu1 WHERE id_menu1 = '".$id."'";
        mysqli_query($conn, $sql_xoa);
        header('Location:../../index.php?action=quanlythongke&query=them');
    }
?>
<?php
    include('../../config/config.php');
    $doan = $_POST['doan'];
    $douong = $_POST['douong'];
    $doannhe = $_POST['doannhe'];
    $dotrangmieng = $_POST['dotrangmieng'];

    if(isset($_POST['themmenu2'])){
        $sql_them = "INSERT INTO tbl_menu2(doan, douong, doannhe, dotrangmieng)
            VALUE('".$doan."','".$douong."','".$doannhe."','".$dotrangmieng."')";
        mysqli_query($conn, $sql_them);
        header('Location:../../index.php?action=quanlythongke&query=them');
    }
    elseif(isset($_POST['suamenu2'])){

        $sql_update = "UPDATE tbl_menu2 SET doan='".$doan."', douong='".$douong."',doannhe='".$doannhe."',dotrangmieng='".$dotrangmieng."'
            WHERE id_menu2='$_GET[idmenu2]'";

        $sql = "SELECT * FROM tbl_menu2 WHERE id_menu2 = '$_GET[idmenu2]' LIMIT 2";
        $query = mysqli_query($conn, $sql);
        mysqli_query($conn, $sql_update);
        header('Location:../../index.php?action=quanlythongke&query=them');
    }
    else{
        $id=$_GET['idmenu2'];
        $sql = "SELECT * FROM tbl_menu2 WHERE id_menu2 = '$id' LIMIT 2";
        $query = mysqli_query($conn, $sql);
        $sql_xoa = "DELETE FROM tbl_menu2 WHERE id_menu2 = '".$id."'";
        mysqli_query($conn, $sql_xoa);
        header('Location:../../index.php?action=quanlythongke&query=them');
    }
?>
<?php
    include('../../config/config.php');
    $doan = $_POST['doan'];
    $douong = $_POST['douong'];
    $doannhe = $_POST['doannhe'];
    $dotrangmieng = $_POST['dotrangmieng'];

    if(isset($_POST['themmenu3'])){
        $sql_them = "INSERT INTO tbl_menu3(doan, douong, doannhe, dotrangmieng)
            VALUE('".$doan."','".$douong."','".$doannhe."','".$dotrangmieng."')";
        mysqli_query($conn, $sql_them);
        header('Location:../../index.php?action=quanlythongke&query=them');
    }
    elseif(isset($_POST['suamenu3'])){

        $sql_update = "UPDATE tbl_menu3 SET doan='".$doan."', douong='".$douong."',doannhe='".$doannhe."',dotrangmieng='".$dotrangmieng."'
            WHERE id_menu3='$_GET[idmenu3]'";

        $sql = "SELECT * FROM tbl_menu3 WHERE id_menu3 = '$_GET[idmenu3]' LIMIT 3";
        $query = mysqli_query($conn, $sql);
        mysqli_query($conn, $sql_update);
        header('Location:../../index.php?action=quanlythongke&query=them');
    }
    else{
        $id=$_GET['idmenu3'];
        $sql = "SELECT * FROM tbl_menu3 WHERE id_menu3 = '$id' LIMIT 3";
        $query = mysqli_query($conn, $sql);
        $sql_xoa = "DELETE FROM tbl_menu3 WHERE id_menu3 = '".$id."'";
        mysqli_query($conn, $sql_xoa);
        header('Location:../../index.php?action=quanlythongke&query=them');
    }
?>
<?php
    include('../../config/config.php');
    $doan = $_POST['doan'];
    $douong = $_POST['douong'];
    $doannhe = $_POST['doannhe'];
    $dotrangmieng = $_POST['dotrangmieng'];

    if(isset($_POST['themmenu4'])){
        $sql_them = "INSERT INTO tbl_menu4(doan, douong, doannhe, dotrangmieng)
            VALUE('".$doan."','".$douong."','".$doannhe."','".$dotrangmieng."')";
        mysqli_query($conn, $sql_them);
        header('Location:../../index.php?action=quanlythongke&query=them');
    }
    elseif(isset($_POST['suamenu4'])){

        $sql_update = "UPDATE tbl_menu4 SET doan='".$doan."', douong='".$douong."',doannhe='".$doannhe."',dotrangmieng='".$dotrangmieng."'
            WHERE id_menu4='$_GET[idmenu4]'";

        $sql = "SELECT * FROM tbl_menu4 WHERE id_menu4 = '$_GET[idmenu4]' LIMIT 4";
        $query = mysqli_query($conn, $sql);
        mysqli_query($conn, $sql_update);
        header('Location:../../index.php?action=quanlythongke&query=them');
    }
    else{
        $id=$_GET['idmenu4'];
        $sql = "SELECT * FROM tbl_menu4 WHERE id_menu4 = '$id' LIMIT 4";
        $query = mysqli_query($conn, $sql);
        $sql_xoa = "DELETE FROM tbl_menu4 WHERE id_menu4 = '".$id."'";
        mysqli_query($conn, $sql_xoa);
        header('Location:../../index.php?action=quanlythongke&query=them');
    }
?>