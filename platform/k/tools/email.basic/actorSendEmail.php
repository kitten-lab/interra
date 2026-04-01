<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

require_once(__DIR__ . '/../../configs/env_config.php');
  $dir =  __DIR__ . '/../../../d/email.basic/' . $_POST['sys'];

if (!is_dir($dir)) {
    mkdir($dir, 0775, true);
}
  $file = $dir . '/data.json';

  // Read existing data
  $json = file_get_contents($file);
  $posts = json_decode($json, true);

  if (!$posts) {
    $posts = [];
  }

  // Create new post
  $newPost = [
    "ch.IMP_OIC" => bin2hex(random_bytes(3)),
    "gaia.UNIX" => time(), 
    "ch.IMP_EPC" => $_POST['ch.IMP_EPC'],
    "ch.IMP_LIC" => date('\RY \E\Dm:\E\Tw:\E\Nd'),
    "ch.IMP_TP" => date('\Dg:\Ti:\Ns'),
    "bet.LOC" => 'b:||' . $_POST['bet.sys'] . '|' . $_POST['bet.dom'] . '^mod:' . $_POST['bet.mod'],
    "to_dom" => $_POST['to_dom'],
    "to_mod" => $_POST['to_mod'],
    "from_dom" => $_POST['from_dom'],
    "from_mod" => $_POST['from_mod'],
    "branchTitle" => $_POST['branchTitle'],
    "branchLeaf" => $_POST['branchLeaf']
  ];

  // Add it
  $posts[] = $newPost;

  // Save it
  file_put_contents($file, json_encode($posts, JSON_PRETTY_PRINT));


}

