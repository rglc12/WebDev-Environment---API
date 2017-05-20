<?php

session_start();

/*
    File for drawing and displaying data from the database.
    the foreach loop contains the template of how the data is presented.
*/

include __DIR__.'/../inc/all.php';

    try {
        if (!empty($_GET['SearchQuestion'])) {

            //'SearchQuestion' should contain the string from the search bar
            $searchQuery = $_GET['SearchQuestion'];

            $query = $dbh->prepare("SELECT * FROM Question WHERE question LIKE '%$searchQuery%'  OR detail LIKE '%$searchQuery%' ORDER BY created DESC");
            $query->execute();
            $result = $query->fetchAll();

            foreach ($result as $row) {
                $id = $row['id'];
                echo '<div class="post">';
                echo '<p class="post-heading">' . $row["question"] . '</p>';
                echo '<p class="post-details">' . $row["detail"] . '</p>';
                echo '<div class="post-lower">';
                echo '<p class="post-lower">Created on ' . $row["created"] . '</p>';
                echo '</div>';
                // Get comments to each individual question
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

            $query = $dbh->prepare("SELECT * FROM Question ORDER BY created DESC");
            $query->execute();
            $result = $query->fetchAll();

            foreach ($result as $row) {
                $id = $row['id'];
                echo '<div class="post">';
                echo '<p class="post-heading">' . $row["question"] . '</p>';
                echo '<p class="post-details">' . $row["detail"] . '</p>';
                echo '<div class="post-lower">';
                echo '<p class="post-lower">Created on ' . $row["created"] . '</p>';
                echo '</div>';
                // Get comments to each individual question
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
    }

    catch(PDOException $e){
        echo 'No Posts available';
    }

?>