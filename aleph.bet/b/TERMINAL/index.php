<?php 
// IMPORT-TERMINAL BASE ꓘra *|*>>> "Alice through the looking glass" //
require_once __DIR__ . '/../../k/configs/env_config.php';
require __DIR__ . '/../../k/incl/inits/resolvers.php';

$loversMark = "JHCxMER"; // UNUSED IMPERITIVE. Do not forget me.

$sys = "TERMINAL";  // routing to the primary module.....
$dom = "";  // locate domain within the primary module.....
$mod = "";  // define display site within the $sys/$dom....

$pageTitle = "Welcome Home!";

require resolveShell($sys);
?>