<?php

    session_start();

    include __DIR__.'/../inc/all.php';

    try{

        $username = $_SESSION['username'];

        // Using the session username, search for their logbook
        $query = $dbh->prepare("SELECT logbook FROM Logbook WHERE username = '$username' LIMIT 1");
        $query->execute();
        $results = $query->fetchAll();

        foreach ($results as $row){
            echo ''.$row["logbook"].'';
        }

    } catch(PDOException $e) {

        echo 'No logbook data';

    }


?>