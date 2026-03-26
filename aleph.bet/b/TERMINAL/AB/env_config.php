<?php

$ENV = 'local';

if ($ENV === 'local') {
    define('a_root', 'http://localhost:9808/a');
    define('b_root', 'http://localhost:9808/b');
    define('k_root', 'http://localhost:9808/k');
} else {
    define('a_root', 'http://a.imported.to');
    define('b_root', 'http://b.imported.to');
    define('k_root', 'http://k.imported.to');
}

?>