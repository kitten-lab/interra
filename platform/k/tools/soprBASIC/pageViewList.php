<?php $SITE = $GLOBALS['SITE'];

require_once $GLOBALS['INTERA']['TOOLS'] . 'parsedown/Parsedown.php'; 

require_once __DIR__ . '/-SIG-soprBASIC.php'; // ASSISTANT SETTINGS
require_once __DIR__ . '/-CRATE-soprBASIC.php'; // CRATE FILLER SETTINGS

require_once $GLOBALS['INTERA']['SYSTEM'] . 'shadowENVO.php';
    $IS_IT = $GLOBALS['TOOL']['SHADOWENVO'];
        $sha_env = shadowENVO($IS_IT);
            if ($IS_IT == true) {
                echo "<div class='sha_env'>shadow mode on</div>";
}

$FIG = getFIG("soperBASIC", "ViewList"); 



$SHADOW_PROD_TOGGLE = $sha_env;
$router_1 = ROUTE('d', $SHADOW_PROD_TOGGLE);

$route = $router_1 . $GLOBALS[$SITE]['URI'] . '/';
    $CHEST = $route . $GLOBALS[$SITE]['DOM_SLUG'] . '-' . $GLOBALS[$SITE]['ROOM_SLUG'] . '.sopr.frags.json';    
  

if(file_exists($CHEST)) {
    $CHEST_THINGS = json_decode(file_get_contents($CHEST), true);
        $Parsedown = new Parsedown();

        foreach ($CHEST_THINGS as $CRATE) {
        foreach ($CRATE as $TIMBER) {
            echo "<h3>" . $TIMBER['LABEL'] . "</h3>";
            foreach ($TIMBER['SOPERS'] as $SOPR){
        echo "<div class='soper_frag'>";
                echo "<div class='slug'>" . $SOPR['ID'];
        echo "</div>"; 
                echo "<div class='content'>" . $Parsedown->text($SOPR['FRAG']);
        echo "</div>"; 
        echo "</div>"; 
            }
            
    } 
    }
} else { 
    echo "No fragments found."; 
    }
