<?php 
	if (!empty($_POST)) {
		$favicon = $_POST["url"];
	} else {
		$favicon = "/files/img/sys_favicon.png";
	}
?>
<!DOCTYPE html>
	<head>
		<title>Favicon Tester</title>
		<?php
			echo "<link rel='icon' href='";
			echo $favicon;
			echo "'>\n";
		?>
		<link rel='stylesheet' type='text/css' href='/files/css/backend.css'>
		<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
		<script src='/files/js/general.js'></script>
	</head>
	<body>
		<h1>Favicon Tester</h1>
		<form action='/sys/test/favicon/' method='post'>
			<b>Favicon URL:</b> <br/> 
			<input type='text' name='url' value='/files/img/'> <br><br/>
			<input type='submit' value='Enter'>
		</form>
		<br/><a href="/">Home</a> - <a href="/sys/">System</a>
	</body>
</html>