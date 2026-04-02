<?php
$ENV = 'local';
date_default_timezone_set("America/NewYork");

if ($ENV === 'local') {
    define('a_root', 'http://localhost:9808/a');
    define('b_root', 'http://localhost:9808/b');
    define('d_root', 'http://localhost:9808/d');
    define('k_root', 'http://localhost:9808/k');
} else {
    define('a_root', 'http://a.imported.to');
    define('d_root', 'http://d.imported.to');
    define('b_root', '');
    define('k_root', 'http://k.imported.to');
}


?>