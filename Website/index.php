<?php
	include_once('./include/conn.php');
	include_once('./include/functions.php');
?>
<html>
<head>
<meta charset="UTF-8">
<meta name="description" content="Free Coding Tutorials">
<meta name="keywords" content="HTML,CSS,JavaScript,PHP,Computer Science, Web">
<meta name="author" content="Free Coding Tutorials">
<link rel="icon" href="./imgs/url_icon.jpg">


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="./css/navbar.css"/>


<link rel="stylesheet" href="./css/top.css"/>
<link rel="stylesheet" href="./css/recent.css"/>

<link rel="stylesheet" href="./css/footer.css"/>
<title>Free Coding Tutorials</title>
</head>
<body>
<?php
	include_once('./include/analyticstracking.php');
?>
<div class="top_wrapper">
	<?php
		include_once('./html/navbar.php');
	?>
	<div class="container">
		<div class="row topRow" style="margin-top:10%;margin-bottom:20%;">
			<div class="col-sm-10 col-sm-offset-1 text-center">
				<h2 class="intro_text">
					LEARN TO CODE LIKE A PRO<br/>
					
					<br/>
					<br/>
					<a href="#" class="getStarted_btn">Get Started</a>
				</h2>
			</div>
		</div>
	</div>
</div>

<div class="recent_wrapper">
	<div class="container">
		<div class="row recentRow">
			<div class="col-sm-12 text-center">
				<h3 class="title">Recent Video Series</h3>
			</div>
			<?php
				$result = mysqli_query($con, "SELECT * FROM series ORDER BY date_tab") or die("Error 001");
				$count = 0;
				while($row = mysqli_fetch_array($result)){
					//printVideo($row['id'], $row['img'], $row['name']);
					videoItem('series', $row['id'], $row['img'], $row['name']);
					$count++;
					if($count == 3){
						break;
					}
				}
			?>
			
		</div>
	</div>
</div>

<?php
	include_once('./html/footer.php');
?>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>
</html>
