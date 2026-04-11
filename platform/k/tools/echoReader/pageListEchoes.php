<?php 
require __DIR__ . '/../../systems/rehydrateSelf.php';
require_once __DIR__ . '/../skyGenesis/functions.php'; //GET SHADOW PROD TOGGLE
include_once __DIR__ . '/../../systems/invokeSky.php';

$SHADOW_PROD_TOGGLE = SHADOW_PROD_ENV(false);
$ROUTE__LINE = ROUTE('z');

$ROUTE = $GLOBALS['sonar'] . $SHADOW_PROD_TOGGLE . $ROUTE__LINE . 'ECHO/' . date('Y-m') . '/';
$CHEST = $ROUTE . '/' . date('Y-m-d') . '_dailyechos.json';

$logs = json_decode(file_get_contents($CHEST), true);

if (!$logs) {
  $logs = [];
}
$reversed = array_reverse($logs);
foreach ($reversed as $log) {
echo "<span style='font-size: 1.3vh; font-family: Sixtyfour'><h2>" . $log['META__DATA']['GAIA__DATE'] . " at " . $log['META__DATA']['GAIA__TIME'] . "</h2>";
echo $log['ECHO__CHAIN'] . "<br>";
  echo $log['CHEST__CONTEXT'] . "<br><span style='font-size: smaller;'>" . $log['CHEST__HEADER'] . " " . $log['META__DATA']['EVENT__ACTION'];
  echo "</span>";
  echo "<br>";
}
?>
</div>