
<html>
<head>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Allerta' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="./css/navbar.css"/>


	<link rel="stylesheet" href="./css/top.css"/>
	<link rel="stylesheet" href="./css/speakers.css"/>
	<link rel="stylesheet" href="./css/schedule.css"/>
	<link rel="stylesheet" href="./css/app.css"/>
	<link rel="stylesheet" href="./css/contact.css"/>
	
</head>
<body>
<?php
	include_once('./html/navbar.php');
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

		<?php
			include_once('./html/schedule.php');
			include_once('./html/app.php');
			include_once('./html/contact.php');
		?>


	</div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php
	function printTextbox($label, $type, $max, $name, $placeholder, $value){
		echo '<label class="control-label">';
			echo $label;
		echo '</label>';
		echo '<input type="' . $type . '" class="form-control" maxlength="' . $max . '" name="' . $name . '" placeholder="' . $placeholder . '" value="' . $value . '"/>';

	}
	function printSubmit($label){
		echo '<div style="width:100%;text-align:center;">';
			echo '<br/>';
			echo '<br/>';
			echo '<button class="apply_btn" type="submit">';
				echo $label;
			echo '</button>';
		echo '</div>';
	}
	function printTextarea($label, $name){
		echo '<label class="control-label">';
			echo $label;
		echo '</label>';
		echo '<textarea class="form-control" name="' . $name . '"></textarea>';
	}






?>