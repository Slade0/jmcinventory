
<h4 id="forgotpassword">
	<a
	<?php
	if($success){
		echo '<p>Thank you. We have sent you an email with further instructions on how to reset your password.</p>';
	} else {
	    echo form_open();
	    echo form_label('Email Address', 'email') .'<br />';
	    echo form_input(array('name' => 'email', 'value' => set_value('email'))) .'<br />';
	    echo form_error('email');
			echo '<br />';
	    echo form_submit(array('type' => 'submit', 'value' => 'Reset Password'));
	    echo form_close();
    }
    ?>
	</a>
	</h4>
<p id="forgotpassword"><a href="<?php echo site_url('auth/login'); ?>">Login</a></p>
