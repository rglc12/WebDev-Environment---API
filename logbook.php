<?php

    //From MAMP setup tutorial
    $link = mysqli_init();
    $success = mysqli_connect($link, "localhost", "RyanLC", "rglc12", "WebDevEnvironment", 8889);

    if(!$link) {

        die("Could not connect to Database");

    }
?>

<!doctype html>
<html lang = "en">
<head>
    <title>Welcome! WebDevEnvironment</title>
    <meta charset = "UTF-8">

    <!-- CSS Stylesheet -->
    <link href="./css/feed.css" rel="stylesheet">

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
        <a href="index.php"><h1 id="logo"><span id="power">WebDev</span> Environment</h1></a>
        <nav id="nav">
            <ul>
                <li><a href="feed.php">Home</a></li>
                <li><a href="index.php">Logout</a></li>
            </ul>
        </nav>
    </section>
</header>
<section class="fixedwidth flexContainer">
    <div id="profile">
        [PROFILE]
    </div>
    <section class="secondaryContainer" style="background-color: #e0e0e0">
        <h2>[USER FIRST NAME]'s Logbook</h2>
        <textarea id="logbook"></textarea>
    </section>
</body>
</html>

