<?php
session_start();

include __DIR__.'/../inc/all.php';

    // Variables from the AJAX call and Session
    $question = $_GET['question'];
    $details = $_GET['details'];
    $user = $_SESSION['username'];

    // Insert query
    $query = $dbh->prepare("INSERT INTO `Question`(`username`, `question`, `detail`) VALUES ('$user', '$question', '$details')");
    $query->execute();

    // Call getPost.php after the insert query to display posts afterwards
    include __DIR__.'/getPosts.php';


?>