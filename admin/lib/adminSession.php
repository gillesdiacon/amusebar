<?php

	if(!isset($_SESSION['staffName'])){
		echo "<div class='content'>";
			echo "This page is not accesible... if you are not redirected, please click ";
			echo "<a href='/index.php'>here</a> to return to main menu.";
		echo "</div>";
		die();		
	}

?>