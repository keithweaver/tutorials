<?php
	include_once('./include/conn.php');
	include_once('./include/functions.php');
	$id = grab('id');
?>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="./css/navbar.css"/>

<link rel="stylesheet" href="./css/main.css"/>
<link rel="stylesheet" href="./css/series.css"/>


<link rel="stylesheet" href="./css/footer.css"/>
<style>
.navbar{
	height: 70px;
}
</style>
<style>
	.footerRow{
		margin-bottom: 20%;
	}
</style>
</head>
<body>
<?php
	include_once('./analyticstracking.php');
	include_once('./html/navbar.php');
?>
<div class="outter_wrapper">

	<div class="container">
		<div class="row">
			<div class="col-sm-10">
				<div class="col-sm-12 text-center">
					<h2 class="video_title">Video Series</h2>
				</div>
				
				<?php
					if(grab('type')==null || grab('type')==""){
						$result = mysqli_query($con, "SELECT * FROM series ORDER BY date_tab") or die("Error 001");
						$count = 0;
						while($row = mysqli_fetch_array($result)){
							if($count == 0){
								echo '<div class="col-sm-12">';
							}
							videoItem('series', $row['id'], $row['img'], $row['name']);
							if($count == 2){
								echo '</div>';
								$count = -1;
							}
							$count++;
						}
						if($count != 2){
							echo '</div>';
						}
					}else{
						$result = mysqli_query($con, "SELECT * FROM videos WHERE series='$id' ORDER BY order_tab") or die("Error 002");
						while($row = mysqli_fetch_array($result)){
							if($count == 0){
								echo '<div class="col-sm-12">';
							}
							videoItem('video', $row['id'], $row['img'], $row['name']);
							if($count == 2){
								echo '</div>';
								$count = -1;
							}
							$count++;
						}
						if($count != 2){
							echo '</div>';
						}
					}
					
					
				?>
			</div>
			<div class="col-sm-2 ">

			</div>
		</div>
	</div>
</div>
<?php
	include_once('./html/footer.php');
?>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>
</html>