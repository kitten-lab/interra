<?php 

// IMPORT-TERMINAL BASE ꓘra *|*>>> "Alice through the looking glass" //
require_once(__DIR__ . '/../../../../k/configs/env_config.php');
echo '<form method="POST" action="' . k_root . '/tools/blog.basic/add_post.php">'; ?>
  <input name="title" placeholder="Title" required><br>
  <textarea name="body" placeholder="Body" required></textarea><br>
  <button type="submit">Submit</button>
</form>