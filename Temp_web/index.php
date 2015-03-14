<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link href='http://fonts.googleapis.com/css?family=Allerta' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="./css/navbar.css"/>
	
	<link rel="stylesheet" href="./css/top.css"/>

	<link rel="stylesheet" href="./css/speaker.css"/>
	<link rel="stylesheet" href="./css/schedule.css"/>
	<link rel="stylesheet" href="./css/app.css"/>
	
</head>
<body>

<div id="outter_wrapper">
	<?php
		include_Once('./html/navbar.php');
	?>

	<div class="container">
		<div class="row topRow">
			<div class="col-sm-12 text-center">
				<h1 class="date_text">January 21 - 23</h1>
			</div>
		</div>
	</div>

	<div class="bottom_wrapper">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2 text-center">

					<h2 class="section_title fontWhite">Speakers</h2>
				</div>
			</div>
			<div class="row speakerContentRow">
				<div class="col-sm-2 text-center col-sm-offset-2">
					<img src="./imgs/bill.jpg" class="speaker_img"/>
					<p class="speaker_text">Bill Gates</p>
				</div>
				<div class="col-sm-2 text-center">
					<img src="./imgs/bill.jpg" class="speaker_img"/>
					<p class="speaker_text">Bill Gates</p>
				</div>
				<div class="col-sm-2 text-center">
					<img src="./imgs/bill.jpg" class="speaker_img"/>
					<p class="speaker_text">Bill Gates</p>
				</div>
				<div class="col-sm-2 text-center">
					<img src="./imgs/bill.jpg" class="speaker_img"/>
					<p class="speaker_text">Bill Gates</p>
				</div>
			</div>
			<div class="row scheduleRow">
				<div class="col-sm-12 text-center">
					<h2 class="section_title fontWhite">Schedule</h2>
				</div>
				<div class="col-sm-8 col-sm-offset-2">
					<div class="col-sm-4">
						<h4 class="schedule_date_title">Friday</h4>
						<p class="schedule_item">
							8:30 - 9:30 Register
						</p>
						<p class="schedule_item">
							8:30 - 9:30 Register
						</p>
					</div>
					<div class="col-sm-4">
						<h4 class="schedule_date_title">Saturday</h4>
						<p class="schedule_item">
							8:30 - 9:30 Register
						</p>
						<p class="schedule_item">
							8:30 - 9:30 Register
						</p>
					</div>
					<div class="col-sm-4">
						<h4 class="schedule_date_title">Sunday</h4>
						<p class="schedule_item">
							8:30 - 9:30 Register
						</p>
						<p class="schedule_item">
							8:30 - 9:30 Register
						</p>
					</div>
				</div>

			</div>
			<div class="row applicationRow">
				<div class="col-sm-12 text-center">
					<h2 class="section_title fontWhite">Application</h2>
				</div>
				<div class="col-sm-8 col-sm-offset-2 application_wrapper">
					<div class="app_inner">
						<form>
							<?php

								printFormTextbox('First Name:','first_textbox',250,'','');
								printSubmit('Apply');
								function printFormTextbox($label, $type, $name, $max, $placeholder, $value){
									echo '<label class="control-label fontWhite">';
										echo $label;
									echo '</label>';
									echo '<input class="form-control"  type="' . $type . '" maxlength="' . $max . '" name="' . $name . '" placholder="' . $placholder . '" value="' . $value .'">';
								}
								function printSubmit($label){
									echo '<br/>';
									echo '<div style="width:100%;text-align:center;">';
										echo '<button type="submit" class="apply_btn">' . $label .'</button>';
									echo '</div>';
								}
							?>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>
</html>