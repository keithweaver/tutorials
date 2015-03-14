<?php
	$first = pickup('first_textbox', 250, true);
	$last = pickup('last_textbox', 250, true);
	$email = pickup('email_textbox', 250, true);
	$city = pickup('city_textbox', 250, true);	

	include_once('../include/conn.php');

	$date = date('Y-m-d');//2015-03-14

	mysqli_query($con, "INSERT INTO applications (first, last, email, city, date_tab) VALUES ('$first','$last','$email','$city','$date') ") or die("Unable to apply");

	echo '<script>window.location.replace("../thanks");</script>';

	die("Thanks for applying");

	function pickup($box, $max, $blank){
		$data = $_POST[$box];
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		if($max != -1){
			if(strlen($data) > $max){
				die("Your email is too long.");
			}
		}
		if($blank === true){
			if($data == ""){
				die("Your email is blank.");
			}
		}
		return $data;
	}


?>