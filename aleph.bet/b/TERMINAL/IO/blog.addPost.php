<?php 
// IMPORT-TERMINAL BASE ꓘra *|*>>> "Alice through the looking glass" //
require_once __DIR__ . '/../../../k/configs/env_config.php';
require __DIR__ . '/../../../k/incl/inits/resolvers.php';

$loversMark = "JHCxMER"; // UNUSED IMPERITIVE. Do not forget me.

$sys = "TERMINAL";  // routing to the primary module.....
$dom = "IO";  // locate domain within the primary module.....
$mod = "SDK-808";  // define display site within the $sys/$dom....

$pageTitle = "Post a Blog";
$pageSlug = "pages/blog.LogicAddPost.php";
$logicSlug = __DIR__ . '/../../../k/tools/blog.basic/add_post.php';
require resolveShell($sys);
?>