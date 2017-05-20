<?php
session_start();

include 'api/loginCheck.php';
?>
<!doctype html>
<html lang = "en">
<head>
    <title>Welcome! WebDevEnvironment</title>
    <meta charset = "UTF-8">

    <!-- CSS Stylesheet -->
    <link href="./lib/logbook.css" rel="stylesheet">

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
    </section>
</header>
<section class="fixedwidth flexContainer">
    <section class="profileContainer" id="profile">
        <img src="Images/300x400.jpg" id="dp" alt="Profile Picture" />
        <ul class="profileNav">
            <a href="feed.php"><li>Home Feed</li></a>
            <a href="IDE.html" target="_blank"><li>Online IDE</li></a>
            <a href="myPosts.php"><li>My Posts</li></a>
            <a id="logout" onclick="logout()"><li>Logout</li></a>
        </ul>
    </section>
    <section class="secondaryContainer" style="background-color: #e0e0e0">
        <h2 id="logbookName"><?php echo $_SESSION['username'];?>'s Logbook</h2>
        <textarea id="logbook"></textarea>
        <input type="submit" id="download" onclick="downloadLogbook()" value="Download Logbook"/>
    </section>

    <script src="lib/AjaxGet.js"></script>
    <script src="lib/downloadLogbook.js"></script>
    <script src="lib/logbook.js"></script>
    <script src="lib/logout.js"></script>

</body>
</html>

