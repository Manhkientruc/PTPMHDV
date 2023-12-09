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

        elseif(($abc == 'quanlythongke' && $query == 'them')){
            include("modules/quanlythongke/lietke.php");
        }elseif(($abc == 'quanlythongke' && $query == 'sua')){
            include("modules/quanlythongke/suaw.php");
        }

        else{
            include("modules/dashboard.php");
        }
    ?>
</div>