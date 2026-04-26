<?php
require_once 'auth_check.php';
$ENV = 'ROSEWOOD8';
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
    define('i_root', 'https://i.imported.to');
}



$GLOBALS['MATERIAL']['TYPE'] = "Chat";
$GLOBALS['MATERIAL']['SOURCE']['NAME'] = "Glass_Box";
$GLOBALS['MATERIAL']['SOURCE']['ID'] = "2025-02-19__Business_Plan_Help__53msgs.json";
$GLOBALS['MATERIAL']['SOURCE']['CREATED'] = 1739983654;
$GLOBALS['MATERIAL']['SOURCE']['LAST_MODIFIED'] = 1740599830;
$GLOBALS['MATERIAL']['REFS'] = [];
$GLOBALS['MATERIAL']['DETAILS'] = [];
$GLOBALS['MATERIAL']['USER'] = "DANIEL.WAKE";
$GLOBALS['MATERIAL']['ASSISTANT'] = "DW-ASSISTANT"
?>