<div class="clear"></div>
<div class="main">
    <?php
        if(isset($_GET['action']) && ($_GET['query'])){
            $abc = $_GET['action'];
            $query = $_GET['query'];
        }else{
            $abc = '';
            $query = '';
        }
        if(($abc == 'quanlydanhmucsanpham' && $query == 'them')){
            include("modules/quanlydanhmucsp/them.php");
            include("modules/quanlydanhmucsp/lietke.php");
        }elseif(($abc == 'quanlydanhmucsanpham' && $query == 'sua')){
            include("modules/quanlydanhmucsp/suaw.php");
        }

        elseif(($abc == 'ban4' && $query == 'them')){
            include("modules/ban4/them.php");
            include("modules/ban4/lietke.php"); 
        }elseif(($abc == 'ban4' && $query == 'sua')){
            include("modules/ban4/suaw.php");
        }

        else{
            include("modules/dashboard.php");
        }
    ?>
</div>