<?php
    include('../../config/config.php');
    $doan = $_POST['doan'];
    $douong = $_POST['douong'];
    $doannhe = $_POST['doannhe'];
    $dotrangmieng = $_POST['dotrangmieng'];

    if(isset($_POST['themmenu1'])){
        $sql_them = "INSERT INTO tbl_menu1(doan, douong , doannhe, dotrangmieng)
            VALUE('".$doan."','".$douong."','".$doannhe."','".$dotrangmieng."')";
        mysqli_query($conn, $sql_them);
        header('Location:../../index.php?action=ban1&query=them');
    }
    elseif(isset($_POST['suamenu1'])){
        if($dotrangmieng!=''){
            
            $sql_update = "UPDATE tbl_menu1 SET doan='".$doan."', douong='".$douong."', doannhe='".$doannhe."',
            dotrangmieng='".$dotrangmieng."' WHERE id_menu1='$_GET[idmenu1]'";

            $sql = "SELECT * FROM tbl_menu1 WHERE id_menu1 = '$_GET[idmenu1]' LIMIT 1";
            $query = mysqli_query($conn, $sql);

        }else{
            $sql_update = "UPDATE tbl_menu1 SET doan='".$doan."', douong='".$douong."', doannhe='".$doannhe."'
            WHERE id_menu1='$_GET[idmenu1]'";
        }
        mysqli_query($conn, $sql_update);
        header('Location:../../index.php?action=ban1&query=them');
    }
    else{
        $id=$_GET['idmenu1'];
        $sql = "SELECT * FROM tbl_menu1 WHERE id_menu1 = '$id' LIMIT 1";
        $query = mysqli_query($conn, $sql);
        $sql_xoa = "DELETE FROM tbl_menu1 WHERE id_menu1 = '".$id."'";
        mysqli_query($conn, $sql_xoa);
        header('Location:../../index.php?action=ban1&query=them');
    }
?>