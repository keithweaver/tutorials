<?php
	function grab($box){
		$data = $_GET[$box];
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
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
	function videoItem($type, $id, $img, $label){
		if($type == "series"){
			echo '<a href="./series?type=' . $type . '&id=' . $id . '">';
		}else{
			echo '<a href="./video?v=' . $id .'">';
		}
			echo '<div class="col-sm-4 text-center" style="margin-top:30px;">';
				echo '<img src="./imgs/' . $img . '" class="recent_img"/>';
				echo '<p class="series_text">' . $label . '</p>';
			echo '</div>';
		echo '</a>';
	}
	function printVideo($id, $img, $name){
		echo '<div class="col-sm-3 videoRow text-center" style="margin-top:30px;">';
			echo '<a href="series?id=' . $id . '">';
				echo '<img src="./imgs/' . $img . '" class="recent_img"/>';
				echo '<p class="series_text" style="text-decoration:none;">' . $name .'</p>';
			echo '</a>';
		echo '</div>';
	}

?>