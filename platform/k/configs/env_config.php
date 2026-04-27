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



$GLOBALS['MATERIAL']['TYPE'] = "";//"Obsidian Vault";
$GLOBALS['MATERIAL']['SOURCE']['NAME'] = "";// "kitten-lab";
$GLOBALS['MATERIAL']['SOURCE']['ID'] = "";//"design-ideas/game-design-ideas/slot-ideas/detective-mystery-slot";
$GLOBALS['MATERIAL']['SOURCE']['CREATED'] = "";//1773318609;
$GLOBALS['MATERIAL']['SOURCE']['LAST_MODIFIED'] = "";// 1773326109;
$GLOBALS['MATERIAL']['REFS'] = [];
#    "ORIGIN_SOURCE" => "Imported to Vault from Glass_Chats"
#];
$GLOBALS['MATERIAL']['DETAILS'] = [];
$GLOBALS['MATERIAL']['USER'] = "JackWEAK";
$GLOBALS['MATERIAL']['ASSISTANT'] = "JackNIM"

?>