<?php

	mysqli_connect("104.155.107.144", "up724980", "PaSsWoRd", "WebDevEnvironment");

	if(mysqli_connect_error()) {

		die("Could not connect to Database bitch");

	}
?>


<!doctype html>
<html lang = "en">
<head>
	<title>Welcome! WebDevEnvironment</title>
	<meta charset = "UTF-8">
	
	<!-- CSS Stylesheet -->
	<link href="./css/style.css" rel="stylesheet">
	
	<!-- Custom Javasript -->
	<script src="#"></script>
	
	<!-- Google fonts: 'Prociono', 'Arvo' -->
    <link href='http://fonts.googleapis.com/css?family=Prociono' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Arvo:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	
</head>
<body>
	<!-- Nav Bar  -->
    <header id="welcome">
        <section class="fixedwidth">
            <a href="index.html"><h1 id="logo"><span id="power">WebDev</span> Environment</h1></a>
            <nav id="nav">
                <ul>
                    <li><a href="index.html">About Us</a></li>
                </ul>
            </nav>
        </section>
    </header>
	<!-- Login Form -->
	<section class="fixedwidth">
		<div class="flexFormContainer">
			<div>
				<form id="loginForm" action="#" method="post">
					<h2>Login</h2>
					<label for="loginUsername">Username: </label>
					<input type="text" name="loginUsername" />
					<br />
					<label for="loginUsername">Password: </label>
					<input type="password" name="loginPassword" />
					<br />
					<button type="submit">Login</button>
				</form>
			</div>
			<div>
				<form id="signupForm" action="#" method="post">
					<h2>Sign-up Now!</h2>
					<label for="signupUsername">Username: </label>
					<input type="text" name="loginUsername" />
					<br />
					<label for="signupPassword">Password: </label>
					<input type="password" name="signupPassword" />
					<br />
					<label for="confirm">Confirm Password: </label>
					<input type="password" name="confirm" />
					<br />
					<label for="email">Your Email: </label>
					<input type="email" name="email" />
					<br />
					<button type="submit">Sign-up</button>
				</form>
			</div>
		</div>
	</section>
	
</body>
</html>
