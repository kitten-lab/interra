<?php 
require __DIR__ . '/../../incl/inits/nameSelf.php';
$config = $GLOBALS['plogBasicList'] ?? []; 

$path = $sonar . 'd/plogBasic/' . $sys . '/' . $dom . '/data.json';
$logs = json_decode(file_get_contents($path), true);

if (!$logs) {
  $logs = [];
}

$cUID = array_keys($logs);
$cUID = $cUID[0];
$filtered = array_filter($logs, function($log) use ($mod) {
    return ($log['meta.DATA']['acting.DOLLY']) == $mod;
});
?>


<?php 
foreach ($logs as $log) {
  echo "<span class='plogBasic_listItem'><a
  href='?" . $config['Page_Key'] . "=" . $config['Page_Link'] . "&go=" . $log['meta.DATA']['chest.UNIX'] . "&mod=$mod&pv=$pv'>";
  echo $log['log.leafTopic'] . "</a> ";
  echo "<span class='plogBasic_metaData'>";
  echo "</span>";
  if ($plogBasic_gaia == true) {
    echo "<span class='plogBasic_metaData'>";
    echo $log['meta.DATA']['tps.REFS']['tps.gaiaDATE'];
    echo "</span>";
  } else {
    echo "<span class='plogBasic_metaData'>";
    echo $log['meta.DATA']['tps.REFS']['tps.cwCYC'];
    echo $log['meta.DATA']['tps.REFS']['tps.cwRND'];
    echo "</span>";
  }
  echo "</span>";
}
?>
</div>
