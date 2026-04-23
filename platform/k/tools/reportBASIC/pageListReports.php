<?php $SITE = $GLOBALS['SITE']; 
require_once __DIR__ . '/-SIG-reportBASIC.php'; //GET SHADOW PROD TOGGLE
require_once $GLOBALS['INTERA']['TOOLS'] . 'parsedown/Parsedown.php'; //GET SHADOW PROD TOGGLE
require_once $GLOBALS['INTERA']['TOOLS'] . 'skyGenesis/functions.php'; //GET SHADOW PROD TOGGLE

$SHADOW_PROD_TOGGLE = SHADOW_PROD_ENV(false);

$ROUTE__LINE = ROUTE('d', $SHADOW_PROD_TOGGLE);

$ROUTE = $ROUTE__LINE . $GLOBALS[$SITE]['SYS_SLUG'] . '/';
  $CHEST = $ROUTE . $GLOBALS[$SITE]['DOM_SLUG'] . '-' . $GLOBALS[$SITE]['ROOM_SLUG'] . '.report.json';


$CHEST_THINGS = json_decode(file_get_contents($CHEST), true);


foreach ($CHEST_THINGS as $TIMBER) {
  $content = $TIMBER['payload']['post'];
  $unix = $TIMBER['tps']['event_unix'];
    $tpsDT = new DateTime("@$unix");
            $tpsDT->setTimezone(new DateTimeZone("America/New_York"));
            $date = $tpsDT->format('Y-m-d h:i:sa');
  echo "<div><a href='?w=" . $GLOBALS[$SITE]['ROOM_SLUG'] . '&id=' . $TIMBER['tps']['ingest_unix'] . "'>";
  echo $content['topic'] . "</a> posted by " . $TIMBER['route']['from']['mod'] . ' at ' . $date;
  echo "</div>";
}
?>
