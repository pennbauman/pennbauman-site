<?php
	if (isset($_GET['l'])) {
		$query = $pdo->prepare("SELECT url FROM shortcut_links WHERE code=:code");
		$query->execute(["code" => $_GET['l']]);
		if ($query->rowCount() > 0) {
			$result = $query->fetch();
			header("Location: ".$result['url']);
		}
	}
?>
<!DOCTYPE html><html lang='en-US'>
	<head>
		<title>Penn Bauman</title>
		<link rel='canonical' href='https://pennbauman.com'/>
		<link rel='icon' href='/files/img/favicon.png'/>
		<link rel='image_src' href='https://pennbauman.com/files/img/jellyboi_x512.png'>
		<meta charset='UTF-8'/>
		<meta name='viewport' content='width=device-width, initial-scale=1.0'>

		<meta name="author" content="Penn Bauman"/>
		<meta name="description" content="Personal site for Penn Bauman, Student of Computer Science at the University of Virginia School of Engineering."/>
		<meta name="keywords" content="Penn Bauman, Penn Buaman, Pen Bauman, Pen Buaman, Penn Bauman UVA, Penn Bauman Arlington"/>
		<meta name="robots" content="index, follow"/>

		<meta property="og:url" content="https://pennbauman.com"/>
		<meta property="og:type" content="profile"/>
		<meta property="og:site_name" content="Penn Bauman"/>
		<meta property="og:title" content="Penn Bauman"/>
		<meta property="og:description" content="Personal site for Penn Bauman, Student of Computer Science at the University of Virginia School of Engineering."/>
		<meta property="og:image" content="https://pennbauman.com/files/img/jellyboi_x512.png"/>

		<meta name="twitter:url" content="https://pennbauman.com"/>
		<meta name="twitter:card" content="summary"/>
		<meta name="twitter:site" content="@pennbauman"/>
		<meta name="twitter:creator" content="@pennbauman" />
		<meta name="twitter:title" content="Penn Bauman"/>
		<meta name="twitter:description" content="Personal site for Penn Bauman, Student of Computer Science at the University of Virginia School of Engineering."/>
		<meta name="twitter:image" content="https://pennbauman.com/files/img/jellyboi_x512.png"/>

		<link rel='stylesheet' href='/files/font/DejaVu_Font.css'/>
		<style>
			/* Prevent Firefox selected button/link outline */
			:focus {outline:none;}
			::-moz-focus-inner {border:0;}

			:root { font-size:1vh }

			body {
				position:fixed;
				margin:0;
				width:90%;
				padding:15rem 5% 0;

				background-color:#141a1b;
				background-image:url("/files/img/background.jpg");
				background-position: center;
				background-size: cover;
				background-repeat: no-repeat;
				background-attachment: fixed;

				text-align:center;
				font-family:DejaVu_Sans_Mono, Courier, Monospace;
				color:#EEEEEE;
			}
			img {
				width:20rem;
				image-rendering: crisp-edges;
				image-rendering: -moz-crisp-edges;
				image-rendering: -o-crisp-edges;
				image-rendering: -webkit-optimize-contrast;
				-ms-interpolation-mode: nearest-neighbor;
			}
			h1 {
				font-size:5.4rem;
				margin-bottom:0;
			}
			h2 {
				font-size:2.5rem;
				font-weight:normal;
				text-decoration:underline;
			}
			p {
				font-size:2.6rem;
				line-height:3.0rem;
			}
			i {
				font-size:2.0rem;
				font-style:italic;
			}
			a {
				color:inherit;
				text-decoration:none;
			}
		</style>
		<script>
			function textSize() {
				var vh = Math.max(document.documentElement.clientHeight||0, window.innerHeight||0);
				document.documentElement.style.fontSize = (vh/100) + "px";
			}
		</script>
	</head>
	<body onload="textSize()">
		<img src="/files/img/jellyboi_outline_x512.png">
		<h1>Penn Bauman</h1>
		<i><a href="mailto:pennbauman@protonmail.com">pennbauman@protonmail.com</a></i>
		<p>UVA CS Class of 2022</p>
		<h2><a href="/about">About</a></h2>
		<h2><a href="http://github.com/pennbauman">GitHub</a></h2>
		<h2><a href="/resume">Resume</a></h2>
	</body>
</html>
