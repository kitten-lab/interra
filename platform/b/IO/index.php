<?php 
require_once __DIR__ . '/-SKY_AUTH-IO.php';

youAreHere($site, $sonar);

if (empty($_GET)) {
    $uri = trim($_SERVER['REQUEST_URI'], '/');
    $uri = strtok($uri, '?');
    if (str_starts_with($uri, $GLOBALS['YouAreHere'])) {
        $uri = substr($uri, strlen($GLOBALS['YouAreHere']));
    }
    $uri = trim($uri, '/');

    $segments = explode('/', $uri);

    if (count($segments) >= 2) {
        $_GET[$segments[0]] = $segments[1];
    }

    if (count($segments) == 1) {
        $doors = $GLOBALS[$site]['room'] ?? [];
        foreach ($doors as $door){
            if ($segments[0] == $door['name']) {
                aRoomWithNoKey();
                require resolveShell($GLOBALS['sys'] ?? "TERMINAL");
                exit;
            }
        }
    }
}

$foundKey = false;
$foundRoom = false;

foreach ($_GET as $room => $key) {
    $doors = $GLOBALS[$site]['room'] ?? [];

    foreach ($doors as $door){
        if ($room == $door['name']) {
            $foundRoom = true;
            $path = $GLOBALS['sonar'] . $m['rooms'] . $GLOBALS['site'] . '/' . $door['name'] .'/' . $key . '.php';
            if (empty($key)) {
                aRoomWithNoKey();
                require resolveShell($GLOBALS['sys']);
                exit;
            }
                if (file_exists($path)) {
                    $foundKey = true;
                    require $path;
                    break;
                } 
                break;
        } 
    }
}
    if (!$foundRoom) {
        notARoom();
    }
    if (!$foundKey && $foundRoom) {
        noKeyFound();
    }

require resolveShell($GLOBALS['sys']);



// keyMaker($YouAreHere, "TERMINAL", "IO");
// lockAndKey($sonar, "TERMINAL" ,$m, "IO", $navcall);

?>