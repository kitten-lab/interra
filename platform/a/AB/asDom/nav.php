<?php $config = $nav['navSec'] ?? []; ?>

<h1 class="pageTitle flicker">[HELLO]</h1>
<h1 style="padding-bottom:0px;"><?= $mod ?> [<a href="<?= $location . 'index.php?mod=' . $mod . '&?pv=' . $pv ?>">Home</a>]</h1>
<aside class="nav"><nav>
<ul>
<?php foreach ($nav as $section): ?>
<p style="padding:.3vh 0; margin:0; letter-spacing: 1vh; border-bottom: .15vh solid var(--my-fav-colorInvis)">
<?php echo $section['name']; ?></p>
<?php foreach ($section['items'] as $item): ?>
<li>
<a href="<?= $location . $item['path'] . '?mod=' . $mod . '&?pv=' . $pv  ?>"><?= $item['label']; ?></a>
</li>
<?php foreach ($item['subSec'] as $subItem): ?>
<li> 
<a href="<?= $location . $subItem['path'] . '?mod=' . $mod . '&?pv=' . $pv  ?>" class="navSubSec"><?= $subItem['label']; ?></a>
</li>

<?php endforeach; ?>
<?php endforeach; ?>
<?php endforeach; ?>
</ul>
</nav></aside>