<?php

echo "<div id='stryDiv'>";
echo "<h2>Related Stories</h2><hr>";
foreach ($result as $rows) { 
	$storyID = $rows->storyID;
	$title = $rows->Title;
	$img = $rows->img;
	echo "<div id ='profilestuff'>";
		echo "<div id ='profileSTR'>";
			echo "<a href='http://localhost:8888/cameron_kozinski/index.php/Aysi_news/stories?storyID=$storyID'><img src='http://localhost:8888/cameron_kozinski/img/$img'><h3><span>$title</span></h3></a>";
		echo "</div>";
		
	echo "</div>";
}
echo "</div>";
?>