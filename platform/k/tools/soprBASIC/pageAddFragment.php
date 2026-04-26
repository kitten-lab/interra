<?php 

require_once __DIR__ . '/-SIG-soprBASIC.php'; // ASSISTANT SETTINGS
$FIG = getFIG("soprBASIC", "AddFragment"); 
$SITE = $GLOBALS['SITE'];
$user = 'MRA-' . $FIG['user'];
$assistant = 'ADM-' . $FIG['assistant'];
?>
<!-- Load jQuery and jQuery UI -->


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

<form method="POST" action="">


<span class="">
    <label for="soper_section"><?= $FIG['Section']; ?></label><br>
    <textarea 
    rows="1" cols="60"
    name="soper_section" 
    placeholder="<?= $FIG['Section_plhldr']; ?>" 
    required></textarea>
    <br>
</span>
<span class="">
    <label for="soper_leaf"><?= $FIG['Content']; ?></label><br>
    <textarea 
    rows="3" cols="60"
    name="soper_leaf" 
    placeholder="<?= $FIG['Content_plhldr']; ?>" 
    required></textarea>
    <br>
</span>


    <label for="POST__TAGS"><?= $FIG['Tags']; ?></label><br>
    <textarea 
    rows="5" cols="30"
    name="POST__TAGS" id="tag-input" placeholder="type your thread..." /></textarea><br>


<span class="">
    <label for="POST__EVENT_UNIX"><?= $FIG['UNIX']; ?></label><br>
    <input 
        name="POST__EVENT_UNIX" 
        placeholder="<?= $FIG['UNIX_plhldr']; ?>"
        type="number">
    <br>
</span>


<span style="display: grid; grid-template-columns: auto; gap: 2px; text-align:left;padding: 4px;">
<div>ACTING AGENT:</div>
<div>
<input type="radio" id="MRA" name="agent" value="<?= $user; ?>" style="width:25px;">
<label for="MRA"><?= $user; ?></label>
</div>
<div>
<input type="radio" id="ADM" name="agent" value="<?= $assistant; ?>" style="width:25px;">
<label for="ADM"><?= $assistant; ?></label>
</div>
</span>

  <input type="hidden" name="POST__TZ" id="tz-input">

  <button type="submit">
    <?= $FIG['Submit_Button'] ?? 'Submit'; ?>
  </button> 
  <button type="reset">Reset Form</button>


  <span>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<br>" . $FIG['Confirmation_Msg'];
    echo "<div style='border:1px solid #ffffff33;padding:0px 10px'><pre>";
    echo $GLOBALS['cUID'] . '<br>Time (now if empty): ' . $_POST['POST__EVENT_UNIX'];
    echo "<br>" . $_POST['agent'];
    echo "<br>" . $GLOBALS['soperID'] . "";
    echo "<br> - " . $_POST['soper_leaf'];
    echo "</pre></div>";
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
<?php 
$scripts = (string)$GLOBALS['INTERA']['SYSTEM'];
include $scripts . 'NIM/getTAGGED.php';
include $scripts . 'NIM/localSTORE.php';
?>
