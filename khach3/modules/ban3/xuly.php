<?php
    include('../../config/config.php');
    $doan = $_POST['doan'];
    $douong = $_POST['douong'];
    $doannhe = $_POST['doannhe'];
    $dotrangmieng = $_POST['dotrangmieng'];

    if(isset($_POST['themmenu3'])){
        $sql_them = "INSERT INTO tbl_menu3(doan, douong , doannhe, dotrangmieng)
            VALUE('".$doan."','".$douong."','".$doannhe."','".$dotrangmieng."')";
        mysqli_query($conn, $sql_them);
        header('Location:../../index.php?action=ban3&query=them');
    }
    elseif(isset($_POST['suamenu3'])){
        if($dotrangmieng!=''){
            
            $sql_update = "UPDATE tbl_menu3 SET doan='".$doan."', douong='".$douong."', doannhe='".$doannhe."',
            dotrangmieng='".$dotrangmieng."' WHERE id_menu3='$_GET[idmenu3]'";

            $sql = "SELECT * FROM tbl_menu3 WHERE id_menu3 = '$_GET[idmenu3]' LIMIT 3";
            $query = mysqli_query($conn, $sql);

        }else{
            $sql_update = "UPDATE tbl_menu3 SET doan='".$doan."', douong='".$douong."', doannhe='".$doannhe."'
            WHERE id_menu3='$_GET[idmenu3]'";
        }
        mysqli_query($conn, $sql_update);
        header('Location:../../index.php?action=ban3&query=them');
    }
    else{
        $id=$_GET['idmenu3'];
        $sql = "SELECT * FROM tbl_menu3 WHERE id_menu3 = '$id' LIMIT 3";
        $query = mysqli_query($conn, $sql);
        $sql_xoa = "DELETE FROM tbl_menu3 WHERE id_menu3 = '".$id."'";
        mysqli_query($conn, $sql_xoa);
        header('Location:../../index.php?action=ban3&query=them');
    }
?>