
<?php require __DIR__ . '/../../systems/rehydrateSelf.php'; ?>
<style>
.form-table {
ddisplay: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr; /* Two equal columns */
  gap: 20px; /* Optional space between columns */ 
  }

.form-row {
display:flex;
align-items: center;
margin-bottom: 8px; }

.form-row label {
width: 150px;
margin-right: 10px;
font-weight: 600;
}

.form-row input, 
.form-row textarea, 
.form-row select {
flex: .5;
}

.form-row pre {
font-size: .6rem;
margin:0}
</style>
<form method="POST" action="">
<div class="form-table">
<div class="form-row">
<label for="GEN_SYS_SLUG">WORLD SLUG<pre>(Prime Folder)</pre></label>
<input name="GEN_SYS_SLUG" placeholder="{{SYS_SLUG}}" required>
</div>

<div class="form-row">
<label for="GEN_SYS_DISPLAY">WORLD NAME<pre>(Display Name)</pre></label>
<input name="GEN_SYS_DISPLAY" placeholder="{{SYS_DISPLAY}}" required><br>
</div>

<div class="form-row">
<label for="GEN_DOM_SLUG">BUILDING SLUG<pre>(Subfolder)</pre></label>
<input name="GEN_DOM_SLUG" placeholder="{{DOM_SLUG}}" required><br>
</div>
<div class="form-row">
<label for="GEN_DOM_DISPLAY">BUILDING NAME (primary folder)</label>
<input name="GEN_DOM_DISPLAY" placeholder="{{DOM_DISPLAY}}" required><br>
</div>


<div class="form-row">
<label for="GEN_MOD_SLUG">MOD Slug (first sub folder)</label>
<input name="GEN_MOD_SLUG" placeholder="{{MOD_SLUG}}" required><br>
</div>
<div class="form-row">
<label for="GEN_MOD_DISPLAY">MOD Slug (primary folder)</label>
<input name="GEN_MOD_DISPLAY" placeholder="{{MOD_DISPLAY}}" required><br>
</div>



<div class="form-row">
<label for="GEN_KEY_SLUG">SLUG of First KEY</label>
<input name="GEN_KEY_SLUG" placeholder="{{KEY_SLUG}}" required><br>
</div>
<div class="form-row">
<label for="GEN_KEY_DISPLAY">First KEY DISPLAY</label>
<input name="GEN_KEY_DISPLAY" placeholder="{{KEY_DISPLAY}}" required><br>
</div>


<div class="form-row">
<label for="GEN_URI">KEY Slug (primary folder)</label>
<input name="GEN_URI" placeholder="{{URI}}" required><br>
</div>

<div class="form-row">
<label for="GEN_LOVERS_MARK">KEY Slug (primary folder)</label>
<input name="GEN_LOVERS_MARK" placeholder="{{LOVERS_MARK}}" required><br>
</div>

<div class="form-row">
<label for="ACTING__AS">KEY Slug (primary folder)</label>
<input type="radio" id="asSys" name="ACTING__AS" value="asSys">
  <label for="SYS">SYS</label><br>
  <input type="radio" id="asDom" name="ACTING__AS" value="asDom">
  <label for="DOM">DOM</label><br> 
</div>

</div>


<input name="GEN__WORLD_SYS" placeholder="SYS" required><br>
<input name="GEN__WORLD_DOM" placeholder="DOM" required><br>
<input name="GEN__WORLD_MOD" placeholder="MOD" required><br>
<input name="GEN__KEY" placeholder="FIRST_KEY" required><br>
<input name="LOVERS_MARK" placeholder="LOVERS_MARK" required><br>

  <input type='hidden' name='POST__SYS' value='<?= $sys ?>'/> 
  <input type='hidden' name='POST__DOM' value='<?= $dom ?>'/> 
  <input type='hidden' name='POST__MOD' value='<?= $mod ?>'/> 
  <input type="hidden" name="POST__TZ" id="tz-input">

  <button type="submit">CREATE WORLD</button> 

<?php if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  echo $config['CONFIRM_MSG'] ?? 'WORLD CREATED.';
 } 
 ?>

</span>
</form>

<script>
  document.getElementById('tz-input').value = Intl.DateTimeFormat().resolvedOptions().timeZone;
</script>