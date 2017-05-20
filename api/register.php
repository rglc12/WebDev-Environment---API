<?php

session_start();

include __DIR__.'/../inc/all.php';

// Variables from the AJAX call
$regUsername = $_GET['regUsername'];
$regPassword = md5($_GET['regPassword']);

//Check if that username exists
$query = $dbh->prepare("SELECT COUNT('id') FROM User WHERE username = '$regUsername'");
$query->execute();
$result = $query->fetchColumn();

if ($result > 0) {

    echo "Username already Exists! Try again";

} else {

    $query = $dbh->prepare("INSERT INTO `User`(`username`, `password`) VALUES ('$regUsername', '$regPassword')");
    $query->execute();
    print_r(true);
}

?>