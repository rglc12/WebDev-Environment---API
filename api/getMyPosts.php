<?php

session_start();

include __DIR__.'/../inc/all.php';

// Using session username to search for the user's posts
$username = $_SESSION['username'];

    if (!empty($_GET['SearchQuestion'])) {

        //'SearchQuestion' should contain the string from the search bar
        $searchQuery = $_GET['SearchQuestion'];

        // Search both the question and details for data from the search bar
        $query = $dbh->prepare("SELECT * FROM Question WHERE username = '$username' AND question LIKE '%$searchQuery%' OR detail LIKE '%$searchQuery%' ORDER BY created DESC");
        $query->execute();
        $result = $query->fetchAll();

        foreach ($result as $row) {
            $id = $row['id'];
            echo '<div class="post">';
            echo '<div class="post-heading">';
            echo '<p class="post-question">' . $row["question"] . '</p>';
            echo '<a class="post-reply" onclick="deletePost('.$row["id"].')">Delete</a>';
            echo '</div>';
            echo '<p class="post-details">' . $row["detail"] . '</p>';
            echo '<div class="post-lower">';
            echo '<p class="post-lower">Created on ' . $row["created"] . '</p>';
            echo '</div>';

            //query to display the replies/comments of each post
            $getComments = $dbh->prepare("SELECT * FROM Reply WHERE questionID = '$id' ORDER BY created DESC");
            $getComments->execute();
            $getCommentsResults = $getComments->fetchAll();
            foreach($getCommentsResults as $comments) {
                echo '<p class="reply">'.$comments['username'].': '.$comments['reply'].'</p>';
            }
            echo '<input type="submit" id="postReply" onclick="reply('.$row['id'].')" value="Reply to Question" />';
            echo '</div>';
        }
    } else {

        //Show all posts if search bar is empty

        $query = $dbh->prepare("SELECT * FROM Question WHERE username = '$username' ORDER BY created DESC");
        $query->execute();
        $result = $query->fetchAll();

        foreach ($result as $row) {
            $id = $row['id'];
            echo '<div class="post">';
            echo '<div class="post-heading">';
            echo '<p class="post-question">' . $row["question"] . '</p>';
            echo '<a class="post-reply" onclick="deletePost('.$row["id"].')">Delete</a>';
            echo '</div>';
            echo '<p class="post-details">' . $row["detail"] . '</p>';
            echo '<div class="post-lower">';
            echo '<p class="post-lower">Created on ' . $row["created"] . '</p>';
            echo '</div>';

            //query to display the replies/comments of each post
            $getComments = $dbh->prepare("SELECT * FROM Reply WHERE questionID = '$id' ORDER BY created DESC");
            $getComments->execute();
            $getCommentsResults = $getComments->fetchAll();
            foreach($getCommentsResults as $comments) {
                echo '<p class="reply">'.$comments['username'].': '.$comments['reply'].'</p>';
            }
            echo '<input type="submit" id="postReply" onclick="reply('.$row['id'].')" value="Reply to Question" />';
            echo '</div>';

        }
    }


?>