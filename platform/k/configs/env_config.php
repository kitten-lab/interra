<?php
require_once 'auth_check.php';
$ENV = 'ROSEWOOD8';
$GLOBALS['ENV'] = $ENV;
date_default_timezone_set("America/New_York");

if ($ENV === 'ROSEWOOD8') {
    define('a_root', 'http://localhost:9808/a');
    define('b_root', 'http://localhost:9808/b');
    define('d_root', 'http://localhost:9808/d');
    define('k_root', 'http://localhost:9808/k');
    define('i_root', 'http://localhost:9808/i');
} else {
    define('a_root', 'https://a.imported.to');
    define('d_root', 'https://d.imported.to');
    define('b_root', 'https://b.imported.to');
    define('k_root', 'https://k.imported.to');
    define('i_root', 'http://i.imported.to');
}



$GLOBALS['MATERIAL']['TYPE'] = "Obsidian Vault";
$GLOBALS['MATERIAL']['SOURCE']['NAME'] = "TERMINAL IO";
$GLOBALS['MATERIAL']['SOURCE']['ID'] = "I AM MINE/_Chesters Imports/TERMINAL IO/";
$GLOBALS['MATERIAL']['SOURCE']['CREATED'] = "check crate";
$GLOBALS['MATERIAL']['SOURCE']['LAST_MODIFIED'] = "check crate";
$GLOBALS['MATERIAL']['REFS'] = [];
#    "ORIGIN_SOURCE" => "Imported to Vault from Glass_Chats"
#];
$GLOBALS['MATERIAL']['DETAILS'] = [];
$GLOBALS['MATERIAL']['USER'] = "SDK-808";
$GLOBALS['MATERIAL']['ASSISTANT'] = "WIRE-WOLF"

?>