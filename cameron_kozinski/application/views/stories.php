<?php
echo "<div id='stories'>";
foreach ($results as $rows) {
	$title = $rows->Title;
	$img = $rows->img;
	$subTitle = $rows->subTitle;
	$story = $rows->story;
	$link = $rows->link;

	echo "
	<h1>$title</h1>
	<h3>$subTitle</h3>
	<img src='http://localhost:8888/cameron_kozinski/img/$img'>
	<p>$story</p>
	<a href='$link'>-Source-</a>
	";
}
echo "</div>";