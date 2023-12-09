<?php
    include('../../config/config.php');
    $doan = $_POST['doan'];
    $douong = $_POST['douong'];
    $doannhe = $_POST['doannhe'];
    $dotrangmieng = $_POST['dotrangmieng'];

    if(isset($_POST['themmenu2'])){
        $sql_them = "INSERT INTO tbl_menu2(doan, douong , doannhe, dotrangmieng)
            VALUE('".$doan."','".$douong."','".$doannhe."','".$dotrangmieng."')";
        mysqli_query($conn, $sql_them);
        header('Location:../../index.php?action=ban2&query=them');
    }
    elseif(isset($_POST['suamenu2'])){
        if($dotrangmieng!=''){
            
            $sql_update = "UPDATE tbl_menu2 SET doan='".$doan."', douong='".$douong."', doannhe='".$doannhe."',
            dotrangmieng='".$dotrangmieng."' WHERE id_menu2='$_GET[idmenu2]'";

            $sql = "SELECT * FROM tbl_menu2 WHERE id_menu2 = '$_GET[idmenu2]' LIMIT 2";
            $query = mysqli_query($conn, $sql);

        }else{
            $sql_update = "UPDATE tbl_menu2 SET doan='".$doan."', douong='".$douong."', doannhe='".$doannhe."'
            WHERE id_menu2='$_GET[idmenu2]'";
        }
        mysqli_query($conn, $sql_update);
        header('Location:../../index.php?action=ban2&query=them');
    }
    else{
        $id=$_GET['idmenu2'];
        $sql = "SELECT * FROM tbl_menu2 WHERE id_menu2 = '$id' LIMIT 2";
        $query = mysqli_query($conn, $sql);
        $sql_xoa = "DELETE FROM tbl_menu2 WHERE id_menu2 = '".$id."'";
        mysqli_query($conn, $sql_xoa);
        header('Location:../../index.php?action=ban2&query=them');
    }
?>