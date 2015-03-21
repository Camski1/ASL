<?php
	

foreach ($results as $rows) {
	$img = $rows->img;
	$fName = $rows->fName;
	$lName = $rows->lName;
	$uName = $rows->userName;
	$about = $rows->about;

	echo "<div id ='profileImg'><img src='http://localhost:8888/cameron_kozinski/img/$img'></div><br/>";
	echo "<h2>".$fName." ".$lName."</h2>";
	echo $uName."<br/>";
	echo "<p id = 'about'>".$about."</p>";
}
	
?>
	<div id = "write-edit">
	<a href="http://localhost:8888/cameron_kozinski/index.php/Aysi_news/writeStory">-Write Story-</a>
	<a href="http://localhost:8888/cameron_kozinski/index.php/Aysi_news/editProfile">-Edit Profile-</a>
	</div>