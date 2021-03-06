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

    <!-- Custom JavaScript -->
    
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
        <section class="profileContainer" id="profile">
            <img src="Images/300x400.jpg" id="dp" alt="Profile Picture" />
            <ul class="profileNav">
                <a href="myPosts.php"><li>My Posts</li></a>
                <a href="IDE.html" target="_blank"><li>Online IDE</li></a>
                <a href="logbook.php"><li>Logbook</li></a>
                <a id="logout" onclick="logout()"><li>Logout</li></a>
            </ul>
        </section>
        <section class="secondaryContainer">
            <!-- Insert data form for question -->
            <div id="post-form">
                <label>Question/Discussion:</label>
                <input type="text" id="question" required="required" placeholder="Please enter your Question" />
                <label>Details</label>
                <textarea name="details" id="details" placeholder="Any further Details?"></textarea>
                <input type="submit" name="post1" id="post" value="Post" />
            </div>
            <div id="results">

            </div>
        </section>

        <script src="lib/AjaxGet.js"></script>
        <script src="lib/reply.js"></script>
        <script src="lib/livesearch.js"></script>
        <script src="lib/createPost.js"></script>
        <script src="lib/logout.js"></script>

</body>
</html>
