
    <h4 id = "login">
      <a
		  <?php
      if($error) echo '<p class="error">'. $error .'</p>';
      echo form_open();
      echo form_label('Email Address', 'email') .'<br />';
      echo form_input(array('name' => 'email', 'value' => set_value('email'))) .'<br />';
      echo form_error('email');
      echo form_label('Password', 'password') . '<br />';
      echo form_password(array('name' => 'password', 'value' => set_value('password'))) . '<br />';
      echo form_error('password');
      echo '<br />';
      echo form_submit(array('type' => 'submit', 'value' => 'Login'));
      echo form_close();
      ?>
      </a>
	</h4>

<p id="login"><a href="<?php echo site_url('auth/signup'); ?>">Sign Up</a> | <a href="<?php echo site_url('auth/forgot'); ?>">Forgot Password?</a></p>
