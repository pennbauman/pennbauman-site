<?php 
	include "/home/valypfnd/php/std.php";
	include "/home/valypfnd/php/auth.php";
	include "/home/valypfnd/php/file_path.php";
	include "/home/valypfnd/php/get_site.php";
	$n = "<br/>";

	if ($auth > 8) {
		echo "<!DOCTYPE html><head>";
		echo "<title>Test</title>";
		echo "<link rel='icon' href='/files/images/sys_favicon.png'>";
		echo "<link rel='stylesheet' type='text/css' href='/files/css/backend.css'>";
		echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>";
		echo "<script src='/files/js/general.js'></script>";
		echo "</head>\n<body>";
		
		echo "user: ".$username." (<a href='/account/logout.php".$returnLink."'>logout</a>)";
		echo "<h1>Test</h1>";

		echo "<p>";
		echo '$_SERVER["DOCUMENT_ROOT"] = '.$_SERVER["DOCUMENT_ROOT"].$n;
		echo "\$currentSite = ".$currentSite.$n;
		echo "\$filePath = ".$filePath.$n.$n;

		//echo "$_SERVER['HTTP_HOST'] = ".$_SERVER['HTTP_HOST'].$n;
		//echo "$_SERVER['REQUEST_URI'] = ".$_SERVER['REQUEST_URI'];
		echo "</p>";
		
		echo '<br/><br/><br/><a href="/">Home</a> - <a href="/sys/">System</a>';
		echo "</body></html>";
	} else {
		include "/home/valypfnd/php/auth_error.php";
	}
?>