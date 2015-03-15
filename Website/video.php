<?php
	include_once('./include/conn.php');
	include_once('./include/functions.php');
	$id = grab('v');
?>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="./css/navbar.css"/>

<link rel="stylesheet" href="./css/main.css"/>
<link rel="stylesheet" href="./css/series.css"/>
<link rel="stylesheet" href="./css/video.css"/>


<link rel="stylesheet" href="./css/footer.css"/>
<style>
.navbar{
	height: 70px;
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
				
				<?php
					$result = mysqli_query($con, "SELECT * FROM videos WHERE id='$id'") or die("Error 001");
					$name = "";
					$path = "";
					$series = 0;
					$order = 0;
					while($row = mysqli_fetch_array($result)){
						$name = $row['name'];
						$path = $row['path'];
						$series = $row['series'];
						$order = $row['order_tab'];
					}
					echo '<div class="col-sm-10 col-sm-offset-1 text-center">';
						echo '<h2 class="video_title">' . $name . '</h2>';
					echo '</div>';
					echo '<div class="col-sm-10 col-sm-offset-1 text-center">';
						echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/' . $path . '" frameborder="0" allowfullscreen></iframe>';
					echo '</div>';
					echo '<div class="col-sm-10 col-sm-offset-1 video_options_wrapper">';
						//last video in the series
						//or not
						//first video in the series
						//or not
						echo '<p>';
							if($order != 1){
								$prev_order = $order - 1;
								$result = mysqli_query($con, "SELECT * FROM videos WHERE series='$series' AND order_tab='$prev_order'") or die("Error 002: ");
								$prev_id = "";
								while($row = mysqli_fetch_array($result)){
									$prev_id = $row['id'];
								}
								echo '<a href="./video?v=' . $prev_id . '" class="move_btn">Previous Video</a>';
							}
							$next_order = $order+1;
							$result = mysqli_query($con, "SELECT * FROM videos WHERE series='$series' AND order_tab='$next_order'") or die("Error 003:");
							if(mysqli_num_rows($result) == 1){
								$next_id = 0;
								while($row = mysqli_fetch_array($result)){
									$next_id = $row['id'];
								}
								echo '<a href="./video?v=' . $next_id . '" class="move_btn">Next Video</a>';
							}
						echo '</p>';
					echo '</div>';
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