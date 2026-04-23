<?php
 $sha_env = SHADOW_PROD_ENV(false);
    $a = $GLOBALS[$SITE];

$router_1 = ROUTE('d', $sha_env);
$tags = $router_1 . '_charlieCATALOG/tag_catalogs/';
  $tagKEEPER = $tags . 'c-node.catalog.json';

echo json_encode($tagKEEPER);