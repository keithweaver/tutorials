<div class="row">
	<div class="col-sm-8 col-sm-offset-2 text-center">
		<h2 class="section_title fontWhite">Drop us a line</h2>
	</div>
</div>
<div class="row appRow">
	<div class="col-sm-8 col-sm-offset-2 app_wrapper">
		<div class="app_inner">
			<form action="./actions/contact" method="POST">
				<?php
					printTextbox('First Name:', 'text', 250, 'first_textbox', '', '');
					printTextbox('Last Name:', 'text', 250, 'last_textbox', '', '');
					printTextbox('Email:', 'email', 250, 'email_textbox', '', '');
					//printTextbox('City:', 'text', 250, 'city_textbox', '', '');
					printTextarea('Message:','message_textbox');
					printSubmit('Send Message');
				?>
			</form>
		</div>
	</div>
</div>