<?php

include __DIR__.'/../inc/db.php';

$username = $_POST['RegUsername'];
$password = $_POST['RegPassword'];

if(isset($_POST['Reg'], $username, $password)) {

    $query = $dbh->prepare("INSERT INTO `User` (username, password) VALUES (:username, :password)");
    $results = $query->execute(array(
        ":username" => $username,
        ":password" => $password
    ));
}

?>