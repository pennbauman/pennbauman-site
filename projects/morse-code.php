<!DOCTYPE html>
	<head>
		<title>Morse Code - Penn Bauman</title>
		<meta charset='UTF-8'>
		<meta name='description' content="Simple morse code typer."/>
		<meta name='author' content='Penn Bauman'>
		<meta name='robots' content='noindex, nofollow'/>
		<link rel="shortcut icon" href="/files/img/morse_favicon.png"> 
		<link rel='stylesheet' type='text/css' href='/files/css/morse-code.css'>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src='/files/js/morse-code.js'></script>
	</head>

	<body>
		<div id="back">
			<a class="hl" href="/projects/">Back</a>
			<span style="color:black">X</span>
			<a class="hl" href="/">Home</a>
		</div>
		<div id="clear">
			<span class="hl" onclick="htmlPrint('main', ''); htmlPrint('bottom', ''); return false;">Clear</span>
		</div>
		<div id="header">
			MORSE CODE<br/>
			<span style="font-size:3.2520325vh">-- --- .-. ... . / -.-. --- -.. .</span>
		</div>
		<div id="back_head"> </div>
		<div id="main"> </div>
		<div id="bottom"> </div>
	</body>
</html>
