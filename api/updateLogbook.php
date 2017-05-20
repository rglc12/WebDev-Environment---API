<?php

    session_start();

    include __DIR__.'/../inc/all.php';

    try{

        // Variables from the AJAX call and Session
        $username = $_SESSION['username'];
        $logbook = $_GET['logbook'];

        // If a logbook entry doesn't exist under this user then create one.
        $createLogbook = $dbh->prepare("INSERT IGNORE INTO `Logbook`(`username`, `logbook`) VALUES ('$username', '$logbook')");
        $createLogbook->execute();

        // updates the record
        $query = $dbh->prepare("UPDATE Logbook SET logbook = '$logbook' WHERE username = '$username'");
        $query->execute();

    } catch(PDOException $e) {

        echo 'No logbook data';

    }

?>