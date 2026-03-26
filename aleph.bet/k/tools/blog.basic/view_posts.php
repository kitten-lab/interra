<?php

require_once(__DIR__ . '/../../configs/env_config.php');
$posts = json_decode(file_get_contents(__DIR__ . '/../../../d/blog.basic/' . $mod . '_data.json'), true);

if (!$posts) {
  $posts = [];
}

// newest first