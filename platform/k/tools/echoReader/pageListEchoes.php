<?php 
require __DIR__ . '/../../systems/rehydrateSelf.php';
require_once __DIR__ . '/../skyGenesis/functions.php'; //GET SHADOW PROD TOGGLE
include_once __DIR__ . '/../../systems/invokeSky.php';

$SHADOW_PROD_TOGGLE = SHADOW_PROD_ENV(false);
$ROUTE__LINE = ROUTE('d', $SHADOW_PROD_TOGGLE);

$ROUTE = $ROUTE__LINE . 'trackerKEEPER/' . date('Y') . '/';
$CHEST = $ROUTE . date('Y-m-d') . '.echo.json';

$CHEST_THINGS = json_decode(file_get_contents($CHEST), true);

if (!$CHEST_THINGS) {
  $CHEST_THINGS = [];
}


usort($CHEST_THINGS, function($a, $b) {
    return $b['TPS']['event_unix'] <=> $a['TPS']['event_unix'];
});

foreach ($CHEST_THINGS as $TIMBER) {
$TIMBER_ENV = $TIMBER['environment'];
$unix = $TIMBER['TPS']['event_unix'];
    $tpsDT = new DateTime("@$unix");
            $tpsDT->setTimezone(new DateTimeZone("America/New_York"));
            $date = $tpsDT->format('Y-m-d h:i:sa');
echo "<pre style='white-space: pre-wrap'>";
echo "<br>";
if (!empty($TIMBER['route'])) {
    echo "To: " . $TIMBER['route']['to']['mod'] . " | From: " . $TIMBER['route']['from']['mod'];
    if ($TIMBER['tool']['name'] == "reportBASIC") {
        echo " Reported in " . $TIMBER_ENV['room']['display'];
    }
    echo "<br>";
} else {
    echo "Posted By " . $TIMBER_ENV['mod']['display'] . " in " . $TIMBER_ENV['room']['display'];
    echo "<br>";
}
echo "Subject: " . $TIMBER['content']['timber']['topic'];
echo "<br>";
echo "Body: " . $TIMBER['content']['timber']['leaf'];
echo "<br>";
echo "<br>";
echo $date . " ";
echo " Tool: " . $TIMBER['tool']['name'] . "(" . $TIMBER['tool']['function'] . ") ";

echo $TIMBER['CUID'] . "<br>" . $TIMBER_ENV['sys']['display'] . " / " . $TIMBER_ENV['dom']['display'] .  ' in the '  .$TIMBER_ENV['room']['display'] . "<br>";

echo "</pre>";
echo "<hr>";
}
?>
</div>