<?php

session_start();

include __DIR__.'/../inc/all.php';

$postID = $_GET['id'];

// Deleting all records with the same value to stop foreign key errors
$checkReply = $dbh->prepare("DELETE FROM Reply WHERE questionID = '$postID'");
$checkReply->execute();

// Deletes the record from Quetion once all Replies have been deleted.
$checkQuestion = $dbh->prepare("DELETE FROM Question WHERE id = '$postID'");
$checkQuestion-> execute();

// After the queries have run, display all posts that belong to the user
include __DIR__.'/getMyPosts.php';

?>
