<?php /* 
==================== C O N F I G . f i l e  ==================== 
================================================================
>| Do not forget me. */ $loversMark = "808ʞps"; 

$GLOBALS['sys'] = "TERMINAL"; 
$GLOBALS['dom'] = "IO"; 
$GLOBALS['mod'] = $_GET['mod'] ?? "SDK-808"; 
$GLOBALS['site'] = $dom; 

$GLOBALS[$site]['room'] = [
                    ["name" => "IO"],
                    ["name" => "communications"],
                    ["name" => "null"]]; 
$GLOBALS[$site]['key'] = "home"; 

    
    include "-FIG--nav.php";
    include "-FIG--plogBasic.php"; 
    include "-FIG--mailroomBasic.php"; 
    include "-FIG--routeErrors.php"; 
    
    function getMy_Styles(){
        getA_Style("style",$GLOBALS['sys'],"asSys");
        getA_Style("sky",$GLOBALS['sys'],"asSys");
        getA_Style("fonts",$GLOBALS['sys'],"asSys");

    }
?>