<?php 
require_once '_configs/clrRoutes.php';
$YouAreHere = 'b/TERMINAL';
if (empty($_GET)) {
        $uri = trim($_SERVER['REQUEST_URI'], '/');
        $uri = strtok($uri, '?');

        if (str_starts_with($uri, $YouAreHere)) {
            $uri = substr($uri, strlen($YouAreHere));
        }
    $uri = trim($uri, '/');

        $segments = explode('/', $uri);

        if (count($segments) >= 2) {
        $_GET[$segments[0]] = $segments[1];
        }
}
foreach ($_GET as $room => $key) {
    $doors = $GLOBALS[$site]['room'] ?? [];

    foreach ($doors as $door){
        if ($room == $door['name']) {
        $path = __DIR__ . '/_rooms_/' . $door['name'] .'/' . $key . '.php';
            if (file_exists($path)) {
        require $path;
            } else {
                skylite(openSky("Key Failure"));
                skylite(bigHeading("Key not for this room."));
                skylite(leaf("I am sorry to inform you that you are LOST."));
            }
        $found = true;
        break;
        } 
        }

        if ($found) {
        break;
    }

    if (!$found) {
        $altpath = __DIR__ . '/_rooms_/' . $GLOBALS[$site]['frontDoor'] .'/' . $GLOBALS[$site]['key'] . '.php';
        require $altpath;
        break;
    }
}

/*
foreach ($doors as $door) {

    $path = __DIR__ . '/_rooms_/' . $door['name'] .'/' . $keyMaker . '.php';
    $altpath = __DIR__ . '/_rooms_/' . $GLOBALS[$site]['frontDoor'] .'/' . $GLOBALS[$site]['key'] . '.php';


    if ($door['name'] == $keyMaker) {
        if (!empty($path) && file_exists($path)) {
            require $path;
            } else {
            require $altpath; 
            skylite("wrong way");
            }
        }
    }
*/



require resolveShell($sys);
?>