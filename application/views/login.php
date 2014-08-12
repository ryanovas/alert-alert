<div class="pass">

	<div class="cont">
		<h1>Enter Password</h1>
		<?php

			$pass = array(
				'type' => 'password',
				'name' => 'pass',
				'placeholder' => 'Password',
				'required' => 'required'
			);

			echo form_open('login_check');
			echo form_input($pass);
			echo form_submit('submit', 'Submit');
			if ($error) echo '<p>Wrong Password</p>';
			echo form_close();

		?>
	</div>

</div>