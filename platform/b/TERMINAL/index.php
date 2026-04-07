<?php 
require_once '_configs/clrRoutes.php';
$GLOBALS['keyMaker'] = $_GET['ROOT'];
if ($_GET['ROOT'] === null){
    $GLOBALS['keyMaker'] = 'ROOT';
}

require __DIR__ . '/ROOT/' . $GLOBALS['keyMaker'] . '.php';
require resolveShell($sys);
?>