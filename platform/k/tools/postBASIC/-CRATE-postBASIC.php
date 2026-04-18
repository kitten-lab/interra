<?php 

function json_payload(){
    return [
    "post" => [
        "topic" => $_POST['POST__TIMBER_TOPIC'],
        "content" => $_POST['POST__TIMBER_LEAF'],
    ]];
}

function json_route(){
$SITE = $GLOBALS['SITE'];
    return [];
}
