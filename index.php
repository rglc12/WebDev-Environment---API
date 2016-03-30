<!doctype html>
<html lang = "en">
<head>
	<title>Welcome! WebDevEnvironment</title>
	<meta charset = "UTF-8">
	<!-- Custom Javasript -->
	<script src="#"></script>

	<!-- CSS Stylesheet -->
	<link href="./css/style.css" rel="stylesheet">
	<!-- Google fonts: 'Prociono', 'Arvo' -->
    <link href='http://fonts.googleapis.com/css?family=Prociono' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Arvo:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	
</head>
<body>
	<!-- Nav Bar  -->
    <header id="welcome">
        <section class="fixedwidth">
            <a href="index.php"><h1 id="logo"><span id="power">WebDev</span> Environment</h1></a>
        </section>
    </header>
	<!-- Login & Registration Forms -->
	<section class="fixedwidth">

		<div class="flexFormContainer">
			<div id="login-form">
				<h2>Login</h2>
				<form method="post">
					<label for="LogUsername">Username</label>
					<input type="text" name="LogUsername" id="LogUsername" required="required" placeholder="Username" />
					<label for="LogPassword">Password</label>
					<input type="password" name="LogPassword" id="LogPassword" required="required" placeholder="Password" />
					<input type="submit" name="Login" value="Login" />
				</form>
			</div>
			<div id="Reg-form">
				<h2>Register</h2>
				<form method="post">
					<label for="RegUsername">Username</label>
					<input type="text" name="RegUsername" id="RegUsername" placeholder="Username" />
					<label for="RegPassword">Password</label>
					<input type="password" name="RegPassword" id="RegPassword" placeholder="Password" />
					<input type="submit" name="Reg" value="Register" />
				</form>
			</div>
		</div>
	</section>

</body>
</html>
