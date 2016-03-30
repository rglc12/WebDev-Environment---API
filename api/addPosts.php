<?php

/*
 * The function to add data to the database... this doesn't want to work
 * but this is from web tutorials and doesn't want to work for me...
 */

    if(isset($_POST['post'])){

        $question = $_POST['question'];
        $details = $_POST['details'];

        $query = "INSERT INTO `Question`(`userID`, `question`, `detail`) VALUES (1, :question, :details)";

        $result = $dbh->prepare($query);

        $execute = $result->execute(array(
            ':question'=>$question,
            ':details'=>$details
        ));
    }

?>