<?php
#require_once $GLOBALS['INTERA']['SYSTEM'] . 'rehydrateSelf.php'; // MOISTURIZE ME
require_once $GLOBALS['INTERA']['SYSTEM'] . 'chestersCrates.php'; // CHEST CRATING SYSTEM
require_once $GLOBALS['INTERA']['SYSTEM'] . 'shadowENVO.php'; // GET SHADOW PROD TOGGLE

require_once __DIR__ . '/-SIG-postBASIC.php'; // ASSISTANT SETTINGS
require_once __DIR__ . '/-CRATE-postBASIC.php'; // CRATE FILLER SETTINGS

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    require __DIR__ . '/../tpsMACHINE.php';  // THE TPS MACHINE 

    $cUID = SKY_GET_cUID($event_time);
    $tUID = SKY_GET_tUID($event_time);

    // ============================================================================
    // OKAY LETS CATALOG AND CRATE THIS BIT OF STUFFS! 
    //=============================================================================

    chestersCRATES($sha_env, $tpstime, $unix, $timezone);
    charliesTHREADS($sha_env, $tpstime);
    catalogUNIX($sha_env, $tpstime);

    //=============================================================================
    // OH $@%! -- DON'T FORGET YOUR TPS REPORT
    // ============================================================================

    tpsREPORTS($sha_env, $tpstime, $ms, $event_time, $syear);
}
