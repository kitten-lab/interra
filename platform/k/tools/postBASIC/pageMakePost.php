<?php 

$FIG = getFIG("postBASIC", "MakePost"); 

?>
<!-- Load jQuery and jQuery UI -->
<script src="https://jquery.com"></script>
<script src="https://jquery.com"></script>
<link rel="stylesheet" href="https://jquery.com">


<form method="POST" action="">
<span class="">
    <label for="POST__TIMBER_TOPIC"><?= $FIG['Topic']; ?></label><br>
    <textarea 
    rows="1" cols="60"
    name="POST__TIMBER_TOPIC" 
    placeholder="<?= $FIG['Topic_plhldr']; ?>" 
    required></textarea>
    <br>
</span>
<span class="">
    <label for="POST__TIMBER_LEAF"><?= $FIG['Content']; ?></label><br>
    <textarea 
    rows="10" cols="60"
    name="POST__TIMBER_LEAF" 
    placeholder="<?= $FIG['Content_plhldr']; ?>" 
    required></textarea>
    <br>
</span>
    <label for="POST__TAGS"><?= $FIG['Tags']; ?></label><br>
    <textarea 
    id="tagTRACKER"
    rows="10" cols="60"
        name="POST__TAGS" 
        placeholder="Tags">
        </textarea>
    <br>
<span class="">
    <label for="POST__EVENT_UNIX"><?= $FIG['UNIX']; ?></label><br>
    <input 
        name="POST__EVENT_UNIX" 
        placeholder="<?= $FIG['UNIX_plhldr']; ?>"
        type="number">
    <br>
</span>

  <input type="hidden" name="POST__TZ" id="tz-input">

  <button type="submit">
    <?= $FIG['Submit_Button'] ?? 'Submit'; ?>
  </button> 

  <span>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo $FIG['Confirmation_Msg'];
    } 
    ?>

    </span>
    </form>

<script>
  document.getElementById('tz-input').value = Intl.DateTimeFormat().resolvedOptions().timeZone;
</script>

<script>
$(function() {
    $("#tagTRACKER").autocomplete({
        source: "getTAGGED.php", // Path to your PHP script
            dataType: "json",
        minLength: 1,
        select: function(event, ui) {
            // Logic to append or replace text in textarea
            console.log("Selected: " + ui.item.value);
        }
    });
});
</script>