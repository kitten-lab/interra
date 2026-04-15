<?php
SKY__AUTH(
    $site,
    $sys,
    $site,
    "ROOT", // storage slug of #MOD
    "ROOT", // display name of MOD
    "communications", // building slug #DOM
    "COMMS", // building display name
    "plog-list", // room slug #ROOM
    "LIST.TXT",// room display name
    "skyline-standard"
);

openSky($GLOBALS[$site]['ROOM_DISPLAY']);

section($c, "","pageTitle");
leaf($GLOBALS[$site]['ROOM_DISPLAY']);
close_section();

leaf("TERMINAL BACK ONLINE.");
getTool('postBASIC', 'NewAdd');


closeSky();
?>