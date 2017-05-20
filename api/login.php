<?php

session_start();

include __DIR__.'/../inc/all.php';

    // Variables from the AJAX call
    $username = $_GET['username'];
    $password = md5($_GET['password']); //Basic encryption

    // Check if record exists
    $query = $dbh->prepare("SELECT COUNT('id') FROM User WHERE username = '$username' AND password = '$password'");
    $query->execute();
    $result = $query->fetchColumn();

    if ($result == 1) {             // If exists, login

        $_SESSION['username'] = $username;
        print_r(true);

    } else {                        // else prevent access to other pages
        print_r(false);
    }
?>