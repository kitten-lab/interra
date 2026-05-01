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
        "DOM" => "portfolio", 
        "BUILDING" => "portfolio home", //nav label
        "PRIME_KEY" => "home", 
        "ROOMS" => [

            [ 
                "KEY" => "silo: my pocket internet",  //nav label
                "ROOM" => "silo_mypi",  // key_name
            ],[ 
                "KEY" => "tiles: narrative loops",  //nav label
                "ROOM" => "tiles_Casework",  // key_name
            ],[ 
                "KEY" => "smh: terminal prolog",  //nav label
                "ROOM" => "smh_terminalprolog",  // key_name
            ],[ 
                "KEY" => "smh: the forgetting house",  //nav label
                "ROOM" => "smh_forgettinghouse",  // key_name
            ],
    /* SECTION GROUP -------------------------------- */
    ]],[ 
        "DOM" => "resume", 
        "BUILDING" => "resume", 
        "PRIME_KEY" => "home", 
        "ROOMS" => [

            [ 
                "KEY" => "overview", 
                "ROOM" => "home", 
            ],

            [ 
                "KEY" => "experience",  //nav label
                "ROOM" => "experience",  // key_name
            ],

            [ 
                "KEY" => "system",  //nav label
                "ROOM" => "system",  // key_name
            ],
    /* SECTION GROUP -------------------------------- */
    ]],
    ];

?>