<div id="adminmenu">
  <?php
  echo form_open();
  echo form_submit(array('type' => 'button', 'value' => 'Log out', 'onClick' => "window.location.href='http://localhost:8080/jmcinventory/auth/logout'"));
  echo form_close();
  ?>
  <a href="<?php echo site_url('auth/logout'); ?>">Log out</a>
</div>
