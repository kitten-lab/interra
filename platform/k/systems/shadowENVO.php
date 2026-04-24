<?php

//SHADOW ENV FUNCTION
function shadowENVO($IS_IT) {
    if ($IS_IT == true) { return '_____/'; }

}

$GLOBALS['shadowENVO'] = true;

$sha_env = shadowENVO(true);
