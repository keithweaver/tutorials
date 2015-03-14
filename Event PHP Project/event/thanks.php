<html>
<head>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Allerta' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="./css/navbar.css"/>


	<link rel="stylesheet" href="./css/top.css"/>
	
	
</head>
<body>
<?php
	include_once('./html/navbar.php');
?>
<div class="container">
	<div class="row topRow">
		<div class="col-sm-12 text-center">
			<?php
				if($_GET['c'] != null){
					echo '<h1 class="date_text">We will get back to you!</h1>';
				}else{
					echo '<h1 class="date_text">Thanks for Applying</h1>';
				}

			?>

					
		
		</div>
	</div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>
</html>
