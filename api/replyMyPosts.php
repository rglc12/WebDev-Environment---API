<?php
session_start();

include __DIR__.'/../inc/all.php';

// Variables from the AJAX call and Session
$questionID = $_GET['questionID'];
$reply = $_GET['reply'];
$username = $_SESSION['username'];

$query = $dbh->prepare("INSERT INTO `Reply`(`questionID`,`username`, `reply`) VALUES ('$questionID', '$username','$reply')");
$query->execute();

include __DIR__.'/getMyPosts.php';

?>
