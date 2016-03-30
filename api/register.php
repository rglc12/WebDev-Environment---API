<?php
/**
 * Created by PhpStorm.
 * User: RyanLC
 * Date: 29/03/2016
 */

include __DIR__.'/../inc/db.php';

try{

    $username = $_POST['RegUsername'];
    $password = $_POST['RegPassword'];

    if(isset($_POST['Reg'], $username, $password)) {

        $query = $dbh->prepare("INSERT INTO `User` (username, password) VALUES (:username, :password)");
        $results = $query->execute(array(
            ":username" => $username,
            ":password" => $password
        ));
    }

    } catch(PDOException $e){
    echo 'why: ' . $e->getMessage();
}

?>