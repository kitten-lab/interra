<div class="blogBasic_container">
<h1>Viewing all Contributions</h1>
<p class="blogBasic_content">Contributions logged for <?= $mod ?> in <?= $sys ?>.<?= $dom ?></p>
<?php 
$posts = array_reverse($posts);

foreach ($filtered as $post) {
  echo "<a href='blog.viewPost.php?id={$post['id']}'>";
  echo $post['title'] . " — " . date("Y-m-d H:i", $post['date']);
  echo "</a><br>";
}
