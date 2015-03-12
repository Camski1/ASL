
<div id="footer">
	<div id="footerNav">
		<ul>
			<a href=""><li>U.S</li></a>
			<a href=""><li>World</li></a>
			<a href=""><li>Sci/Tech</li></a>
			<a href=""><li>Politics</li></a>
			<a href=""><li>Travel</li></a>
			<a href=""><li>Sports</li></a>
			<a href=""><li>Life</li></a>
		</ul>

		<ul>
			<a href=""><li>Twitter</li></a>
			<a href=""><li>Facebook</li></a>
		</ul>

		<ul>
			<a href=""><li>About</li></a>
			<a href=""><li>Terms</li></a>
			<a href=""><li>Sign in</li></a>
			<a href=""><li>Sign Up</li></a>
		</ul>
	</div>
</div>

<?php 
	foreach ($results as $row) {
		$type = $row->type;
		$story = $row->story;
		$img = $row->img;

		echo "<img src='http://localhost:8888/cameron_kozinski/img/$img'>";
	}

?>

</body>
<img src="">
</html>