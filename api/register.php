<?php
/**
 * Created by PhpStorm.
 * User: RyanLC
 * Date: 29/03/2016
 */

include __DIR__.'/../inc/db.php';

if(isset($_POST['Reg'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = $dbh->prepare("INSERT INTO User (username, password) VALUES (:username, :password);");
    $results = $query->execute(array(
        ":username" => $username,
        ":password" => $password
    ));

}

?>