<header>
    <h1><?= $GLOBALS[$SITE]['SYS_DISPLAY'] ?><h1>

</header>
    <div class="NAVIGATION">
        <?php 
        if (!empty($GETS__SITE['sideNav']) 
            && file_exists($GETS__SITE['sideNav'])) {
        require $GETS__SITE['sideNav']; 
        } 
        ?>
    </div>