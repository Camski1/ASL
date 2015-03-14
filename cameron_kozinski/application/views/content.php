<?php 
	echo "<div id='mainHead'>";
	foreach ($results as $rows) {
		$title = $rows->Title;
		$img = $rows->img;
		$storyID = $rows->storyID;

		echo "<div id='story_1'><a href='http://localhost:8888/cameron_kozinski/index.php/Aysi_news/stories?storyID=$storyID'><img src='http://localhost:8888/cameron_kozinski/img/$img'><h3><span>$title</span></h3></a></div>";
	}

	echo "</div>";

	echo "<div id='trending'><h1>Trending</h1><hr>";
	foreach ($results as $rows) {
		$title = $rows->Title;
		$storyID = $rows->storyID;
		echo "<div id='trending1'><a href='http://localhost:8888/cameron_kozinski/index.php/Aysi_news/stories?storyID=$storyID'><h4>$title</h4></a></div>";
	}

	echo "</div>"; 