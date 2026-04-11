<?php /* 
==================== C O N F I G . f i l e  ==================== 
================================================================
>| Do not forget me. */ $loversMark = "I will always know you, even in the dark,"; 

$GLOBALS['sys'] = "TERMINAL"; 
$GLOBALS['dom'] = "CU"; 
$GLOBALS['mod'] = $_GET['mod'] ?? "THE-000"; 
$GLOBALS['site'] = $dom; 
$GLOBALS['SITE_SLUG'] = "CU"; 

$GLOBALS[$site]['room'] = [
                    ["name" => "WELCOMEHOME"],
                    ["name" => "ECHO"],
                    ["name" => "LOOKOUT"],
                    ];
$GLOBALS[$site]['key'] = "CU"; 

    include __DIR__ . "/-FIG--routeErrors.php"; 
    include __DIR__ . "/-FIG--nav.php"; 
    
    function getMy_Styles(){
        getA_Style("style",$GLOBALS['sys'],"asSys");
        getA_Style("sky",$GLOBALS['sys'],"asSys");
        getA_Style("fonts",$GLOBALS['sys'],"asSys");
        getA_Style("style",$GLOBALS['dom'],"asDom");
    }

    function getMy_WWW($www){
        $GLOBALS[$site]['bar'] = $www;
    }
?>