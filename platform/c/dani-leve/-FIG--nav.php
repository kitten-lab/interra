<?php /* 

==================== C O N F I G . f i l e  ==================== 
================================================================
----------------------------------------------------------------
~                terminal navigation config file              ~
----------------------------------------------------------------
Listen, you are going to need to TRUST THE [] colors. They 
don't lie. But sometimes, you will be confused by this nest.
That's okay. Each time it WILL GET EASIER.  -abl 
--------------------------------------------------------------*/
$GLOBALS[$SITE]['GETS']['sideNav'] = $GLOBALS['SONAR'] . 'a/' . $SITE . '/asSys/nav.php'; 


$GLOBALS[$SITE]['tDOM'] = [
                    ["DOM" => "resume"],
                    ["DOM" => "portfolio"],
                    ["DOM" => "contact"],
                    ["DOM" => "w"],
                    ];
$GLOBALS[$SITE]['key'] = "home"; //FOR LATER USE


$nav = [ "navSec" => 

    [ 
        "DOM" => "resume", 
        "BUILDING" => "home", //nav label
        "PRIME_KEY" => "home"
    /* SECTION GROUP -------------------------------- */
    ],[ 
        "DOM" => "resume", 
        "BUILDING" => "system", 
        "PRIME_KEY" => "system", 
    ],[ 
        "DOM" => "resume", 
        "BUILDING" => "experience", 
        "PRIME_KEY" => "experience", 
    ],
    ];

?>