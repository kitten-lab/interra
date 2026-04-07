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
$key = $GLOBALS['keyMaker'];
$nav = [ "navSec" => 

    [ "name" => "COMM-U-CANS", "items" => [

        [ "label" => "INBOX", "path" => "mailroom-in" ],
        [ "label" => "OUTBOX", "path" => "mailroom-out" ],
        [ "label" => "SEND MAIL", "path" => "mailroom-send" ]
    /* SECTION GROUP -------------------------------- */
    ]],
    [ "name" => "IM-PORT-ORS", "items" => [

        /* ITEM SECTION -------------------------------- */
        [ "label" => "OBS-IMPORT0R", "path" => "plog-post" ],
        [ "label" => "CHECK EXPORTS", "path" => "plog-list" ],
    ] ]] ?>