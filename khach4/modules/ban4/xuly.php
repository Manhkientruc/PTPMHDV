<?php
    include('../../config/config.php');
    $doan = $_POST['doan'];
    $douong = $_POST['douong'];
    $doannhe = $_POST['doannhe'];
    $dotrangmieng = $_POST['dotrangmieng'];

    if(isset($_POST['themmenu4'])){
        $sql_them = "INSERT INTO tbl_menu4(doan, douong , doannhe, dotrangmieng)
            VALUE('".$doan."','".$douong."','".$doannhe."','".$dotrangmieng."')";
        mysqli_query($conn, $sql_them);
        header('Location:../../index.php?action=ban4&query=them');
    }
    elseif(isset($_POST['suamenu4'])){
        if($dotrangmieng!=''){
            
            $sql_update = "UPDATE tbl_menu4 SET doan='".$doan."', douong='".$douong."', doannhe='".$doannhe."',
            dotrangmieng='".$dotrangmieng."' WHERE id_menu4='$_GET[idmenu4]'";

            $sql = "SELECT * FROM tbl_menu4 WHERE id_menu4 = '$_GET[idmenu4]' LIMIT 4";
            $query = mysqli_query($conn, $sql);

        }else{
            $sql_update = "UPDATE tbl_menu4 SET doan='".$doan."', douong='".$douong."', doannhe='".$doannhe."'
            WHERE id_menu4='$_GET[idmenu4]'";
        }
        mysqli_query($conn, $sql_update);
        header('Location:../../index.php?action=ban4&query=them');
    }
    else{
        $id=$_GET['idmenu4'];
        $sql = "SELECT * FROM tbl_menu4 WHERE id_menu4 = '$id' LIMIT 4";
        $query = mysqli_query($conn, $sql);
        $sql_xoa = "DELETE FROM tbl_menu4 WHERE id_menu4 = '".$id."'";
        mysqli_query($conn, $sql_xoa);
        header('Location:../../index.php?action=ban4&query=them');
    }
?>