<?php
$nav = $GLOBALS['nav'];
$config = $GLOBALS['nav']['navSec'] ?? []; ?>
<aside class="nav">
<nav>

<DIV class="main_nav"

<ul>

<li class="SKY_ATTENDANT">
ATTENDANT: <?= $GLOBALS['mod'] ?></li>
<?php foreach ($nav as $section): ?>
<li><?php echo $section['name']; ?></li>
<?php foreach ($section['items'] as $item): ?>
<li><a href="<?= b_root . '/' . $site . '/' . $item['door'] . '/' . $item['key'] ?>">
    <?= $item['label']; ?></a></li>
<?php endforeach; ?>
<?php endforeach; ?>
</DIV>
</ul>
</nav></aside>