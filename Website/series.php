<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>


<link rel="stylesheet" href="./css/main.css"/>
<link rel="stylesheet" href="./css/series.css"/>

</head>
<body>

<div class="outter_wrapper">
	<div class="container">
		<div class="row">
			<div class="col-sm-10">
				<div class="col-sm-12 text-center">
					<h2 class="video_title">Video Series</h2>
				</div>
				
					
						
						
					
				
				<?php
					printVideo(1,'youtube.png','Language Free to Context Free Grammar');
					printVideo(1,'youtube.png','Language Free to Context Free Grammar');
					printVideo(1,'youtube.png','Language Free to Context Free Grammar');
					printVideo(1,'youtube.png','Language Free to Context Free Grammar');
					printVideo(1,'youtube.png','Language Free to Context Free Grammar');
					printVideo(1,'youtube.png','Language Free to Context Free Grammar');
					printVideo(1,'youtube.png','Language Free to Context Free Grammar');
					function printVideo($id, $img, $name){
						echo '<div class="col-sm-4 videoRow text-center">';
							echo '<a href="#' . $id . '">';
								echo '<img src="./imgs/' . $img . '" class="youtube_img"/>';
								echo '<p class="video_label" style="text-decoration:none;">' . $name .'</p>';
							echo '</a>';
						echo '</div>';
					}
				?>
			</div>
			<div class="col-sm-2 ">

			</div>
		</div>
	</div>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>
</html>