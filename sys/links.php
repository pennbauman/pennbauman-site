<?php
	include_once "auth.php";
	if ($sys['user']['auth_level'] < 9) {
		if ($sys['user']['auth_level'] == 0) {
			header("Location: ".$sys['link']['login_url']);
		}
		include "auth_error.php";
		exit;
	}
	if (!empty($_POST)) {
		$code = $_POST["code"];
		$link = $_POST["link"];
		$query = $pdo->prepare("INSERT INTO shortcut_links (code, url) VALUES (?, ?)");
		$query->execute([$code, $link]);
	}
?>
<!DOCTYPE html><html>
	<head>
		<title>Shortcut Links</title>
		<meta charset='UTF-8'>
		<meta name='description' content='Links editor.'/>
		<meta name='author' content='Penn Bauman'>
		<meta name='robots' content='noindex, nofollow'/>
		<meta name='viewport' content='width=device-width, initial-scale=1.0'>
		<link rel='icon' href='/files/img/sys_favicon.png'>
		<link rel='stylesheet' href='/files/css/backend.css'>
	</head>
	<body>
		<?php
			//Print Content
			echo "user: ".$sys['user']['username']." (<a href='".$sys['link']['logout_url']."'>logout</a>)";
			echo "<h1>Shortcut Links</h1>";

			echo "<p>";
			$query = $pdo->prepare("SELECT * FROM shortcut_links");
			$query->execute();
			if ($query->rowCount() > 0) {
				foreach ($query as $result) {
					echo $result['code']." -> ".$result['url']."<br/>";
				}
			}
			echo "</p>";

			echo "<form action='/sys/links' method='post'>";
			echo "<b>Code:</b> <br/> <input type='text' name='code'><br/><br/>";
			echo "<b>Link:</b> <br/> <input type='text' name='link'><br/><br/>";
			echo "<input type='submit' value='Enter'></form>";

			insertHTML("sys_footer");
		?>
	</body>
</html>
