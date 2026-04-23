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
$GLOBALS[$SITE]['GETS']['topNav'] = $GLOBALS['SONAR'] . 'a/' . $SITE . '/asSys/top-nav.php'; 

$GLOBALS[$SITE]['tDOM'] = [
                    ["DOM" => "PUBLIC"],
                    ["DOM" => "REGISTRAR"],
                    ["DOM" => "REPORT"],
                    ["DOM" => "w"]
                    ]; 
$GLOBALS[$SITE]['key'] = "home"; 

$nav = [ "navSec" => 

    [ 
        "DOOR" => "PUBLIC", 
        "BUILDING" => "PUBLIC OFFICE", //DOM?
        "KEY" => "FRONT-DESK", 
        "ROOMS" => [

            [ 
                "KEY" => "RECEPTION DESK", 
                "ROOM" => "FRONT-DESK", 
            ],
            [ 
                "KEY" => "SKY DESK REPORTS", 
                "ROOM" => "NEWS", 
            ],
    /* SECTION GROUP -------------------------------- */
    ]],[ 
        "DOOR" => "REPORT", 
        "BUILDING" => "REPORT DEPARTMENT",  
        "KEY" => "FRONT-DESK", 
        "ROOMS" => [

        [ 
            "KEY" => "REPORT AN OMEN", 
            "ROOM" => "OMENS", 
            ],
        [ 
            "KEY" => "REPORT SENSE OF HYMN", 
            "ROOM" => "HYMN", 
            ],
        [ 
            "KEY" => "REPORT A SECRET KNOWN", 
            "ROOM" => "SECRETS", 
            ],
    /* SECTION GROUP -------------------------------- */
    ]],[ 
        "KEY" => "FRONT-DESK", 
        "BUILDING" => "REGISTRAR",  
        "DOOR" => "REGISTRAR", 
        "ROOMS" => [

        [ 
            "KEY" => "REGISTER KEY", 
            "ROOM" => "REGISTER_KEY", 
            ],
        [ 
            "KEY" => "REGISTER WORLD", 
            "ROOM" => "REGISTER_WORLD", 
        ],
    /* SECTION GROUP -------------------------------- */
    ]]
    ];

?>