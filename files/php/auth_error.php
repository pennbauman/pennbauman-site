<?php
	include_once "auth.php";
	include_once "insert.php";

	echo '<!DOCTYPE html><html><head> ';
	if ($sys['user']['auth_level'] > 0) {
		echo '<title>ERROR: 403 Forbidden</title> ';
	} else {
		echo '<title>ERROR: 401 Authorization Required</title> ';
	}
	echo '<link rel="shortcut icon" href="/files/img/error_favicon.png"> <link rel="stylesheet" type="text/css" href="/files/css/errors.css"> </head> <body>';
	if ($sys['user']['auth_level'] > 0) {
		echo '<h1>ERROR: 403 Forbidden</h1> ';
	} else {
		echo '<h1>ERROR: 401 Authorization Required</h1> ';
	}
	echo '<h2> <!--#echo var="HTTP_HOST" --><!--#echo var="REQUEST_URI" --> </h2> ';
	if ($sys['user']['auth_level'] > 0) {
		echo '<h3>The client is not authorized to access this content. </h3> ';
	} else {
		echo '<h3>The client must be authenticated to access this content.</h3> ';
		echo "<p><a href='".$sys['link']['login_url']."'>Login</a></p>";
	}
	insertHTML('backend_footer');
	echo '</body> </html>';
?>
