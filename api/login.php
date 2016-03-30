<?php

include __DIR__.'/../inc/db.php';

if(isset($_POST['Login'])) {
    $username = $_POST['LogUsername'];
    $password = $_POST['LogPassword'];

    $query = $dbh->prepare("SELECT * FROM User WHERE username = ? AND password = ?");
    $result = $query->execute(array(
        $username,
        $password
    ));

    $count = $result->rowCount();
    if ($count == 1) {
        header("Location: feed.html");
        return;
    } else {
        echo "Boo user... boo you dirty user!";
    }
}
?>