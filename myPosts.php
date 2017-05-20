<?php
session_start();

include 'api/loginCheck.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome! WebDevEnvironment</title>
    <meta charset = "UTF-8">

    <!-- CSS Stylesheet -->
    <link href="./lib/feed.css" rel="stylesheet">

    <!-- Google fonts: 'Prociono', 'Arvo' -->
    <link href='http://fonts.googleapis.com/css?family=Prociono' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Arvo:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

</head>
<body>
<!-- Top Bar -->
<header id="welcome">
    <section class="fixedwidth">
        <a href="index.php"><h1 id="logo"><span id="power">WebDev</span> Environment</h1></a>
        <input form="search" type="text" id="search" name="search" placeholder="Search for a Post..." maxlength="40"/>
    </section>
</header>
<section class="fixedwidth main">
    <!-- Left field: Profile/navigation-->
    <section class="profileContainer" id="profile">
        <img src="Images/300x400.jpg" id="dp" alt="Profile Picture" />
        <ul class="profileNav">
            <a href="feed.php"><li>Home Feed</li></a>
            <a href="IDE.html" target="_blank"><li>Online IDE</li></a>
            <a href="logbook.php"><li>Logbook</li></a>
            <a id="logout" onclick="logout()"><li>Logout</li></a>
        </ul>
    </section>
    <!-- Right field: Posts-->
    <section class="secondaryContainer">
        <div id="results">

        </div>
    </section>

    <!-- Custom JavaScript -->
    <script src="lib/AjaxGet.js"></script>
    <script src="lib/replyMyPosts.js"></script>
    <script src="lib/mypostlivesearch.js"></script>
    <script src="lib/deletePost.js"></script>
    <script src="lib/logout.js"></script>

</body>
</html>