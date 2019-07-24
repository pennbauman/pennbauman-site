<?php
	include "/home/valypfnd/php/std.php";
	include "/home/valypfnd/php/auth.php";
	include "/home/valypfnd/php/account.php";
	include "/home/valypfnd/php/file_path.php";
?>
<html>
	<head>
		<title>Account - Penn Bauman</title>
		<link rel='icon' href='/files/images/favicon.png'>
		<link rel='stylesheet' type='text/css' href='/files/css/general.css'>
		<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
		<script src='/files/general.js'></script>
	</head>
	<body>
		<?php
			include "$HOME/php/pennbauman/std_header_navbar.php";
		?>
		<div id="header">
			<h1>Penn Bauman</h1>
		</div>
		<div id="navbar">
			<a href="/pgm/">Programs</a>
			<a href="/games/">Games</a>
			<a href="/about/">About</a>

		</div>

		<div id="content">
			<?php 
				if ($auth > 0) {
					echo "user: ".$username." (<a href='/account/logout.php".$returnLink."'>logout</a>)";
					echo "<h2>Account</h2>";
					echo "<p><b>Username: </b>".$username."<br/>";
					echo "<b>Name: </b>".$userDisplayName."<br/>";
					echo "<b>Email: </b>".$userEmail."<br/>";
					echo "<b>Phone Number: </b>".$userPhoneNum."</p>";
				} else {
					echo "<a href='/account/login".$returnLink."'>login</a>";
					echo "<h2>Account</h2>";
					echo "<p>Not logged in</div>p>";
				}
				
			?>
			
			<!--img src="/files/images/bella_wag.gif"/-->
		</div>
		<?php
			include "$HOME/php/pennbauman/std_footer.php";
		?>
	</body>
</html>