
<!-- TEXT ADJUSTORS FOR "blog.basic" =========
=============DO NOT EDIT BELOW THIS SECTION-->
<?php 
    $blogBasic_placeholderTitle = "SUBJECT OF CONTRIBUTION"; 
    $blogBasic_placeholderBody = $sys . "." . $dom . " CONTRIBUTION CONTENTS";
    $blogBasic_Title = "Submit your contributions";
    $blogBasic_SectionText = "Your contribution will be dated and logged into source. 
    You may view your contribs, but only the  $sys.$dom can remove them.";
    $blogBasic_confirmMsg = "Thank you. Contribution added to forrest.source.";
?>

<div class="blogBasic_container">
<h1>
    <?= $blogBasic_Title; ?>
</h1>
<p class="blogBasic_content">
    <?= $blogBasic_SectionText ?>
</p>


<form method="POST" action="">
  <span class="blogBasic_formEl">
    <input name="title" 
        placeholder="<?= $blogBasic_placeholderTitle ?>" 
        required>
  </span>
    <br>
  <span class="blogBasic_formEl">
    <textarea name="body" 
    placeholder="<?= $blogBasic_placeholderBody ?>" 
    required></textarea>
  </span>
    <br>
  <input type='hidden' name='mod' value='<?php echo "$mod";?>'/> 
  <input type='hidden' name='dom' value='<?php echo "$dom";?>'/> 

  <button type="submit">Submit</button> 

<span class="blogBasic_postMsg">

<?php if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  echo $blogBasic_confirmMsg;
 } 
 ?>

</span>
</form>
<!-- END INSERT CONTRIBUTOR 'blog.basic' -->
