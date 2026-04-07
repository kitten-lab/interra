<?php /* 
==================== C O N F I G . f i l e  ==================== 
================================================================
>| Do not forget me. */ $loversMark = "808ʞps"; 

$GLOBALS['sys'] = "TERMINAL"; 
$GLOBALS['dom'] = "ROOT"; 
$GLOBALS['mod'] = $_GET['mod'] ?? "ROOT"; 
$GLOBALS['site'] = $sys; 

$GLOBALS[$site]['room'] = [
                    ["name" => "root"],
                    ["name" => "communications"],
                    ["name" => "null"]]; 
$GLOBALS[$site]['key'] = "home"; 

    
    include '-FIG--nav.php';
    require_once "-FIG--plogBasic.php"; 
    require_once "-FIG--mailroomBasic.php"; 
    
    function getMy_Styles(){
        getA_Style("style",$GLOBALS['sys'],"asSys");
        getA_Style("sky",$GLOBALS['sys'],"asSys");
        getA_Style("fonts",$GLOBALS['sys'],"asSys");

    }
/*---------
footnotes: 
    [1] Preset by the CHEST'
    [2] Grabs MOD. keep as DOM or KNOWN BASE MOD for DEFAULT.
    [3] getCall to your NAV. DOTH NOT change unless you are removing 
        your capacity for navigating your TERMINAL. I suppose you
        could. But comment it out, will yah? >|
    [4] Insert each config file for your site here. It's easy as long
        as they are in the SAME FOLDER AS THIS ONE! 

*/ 
?>