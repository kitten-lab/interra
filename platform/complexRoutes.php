<?php 

$GLOBALS['c'][$sys] = 'c/' . $sys . '/';
$GLOBALS['a'][$sys] = 'a/' . $sys . '/';
$GLOBALS['c'][$dom] = 'c/' . $dom . '/';
$GLOBALS['b'][$site] = 'b/' . $site . '/';

// Resolve the Root Shell (routes to correct shell for the $dom)
function resolveShell() {
    $SITE = $GLOBALS['SITE'];
    $SYS = $GLOBALS[$SITE]['SYS_SLUG'];
    $prime = $GLOBALS['SONAR'] . "a/" . $SYS . "/asSys/shell.php";
    $kroot = $GLOBALS['SONAR'] . "a/_/__sys.shell.php";

    return file_exists($prime) ? $prime : $kroot;
    }
// ----------------------------------------------------------------

//BETTER ROUTING
$SONAR = $GLOBALS['SONAR'];
$SYS = $GLOBALS[$SITE]['SYS'];
$SITE = $GLOBALS[$SITE]['URI'];

$GLOBALS['ROUTE']['B']['URI'] = $SONAR . "b/" . $SITE . '/';
$GLOBALS['ROUTE']['A'][$SYS] = $SONAR . "a/" . $SYS . '/';
$GLOBALS['ROUTE']['C'][$SYS] = $SONAR . "c/" . $SYS . '/';
$GLOBALS['ROUTE']['M']['URI'] = $SONAR . "m/rooms/" . $SITE . '/';
?>