<?php

// Database connection file
$dsn = 'mysql:host='.DBHOST;

try {

    $dbh = new PDO($dsn . ';dbname=' . DBNAME, DBUSER, DBPASS);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e) {

    echo 'Connection failed: ' . $e->getMessage();

}


?>
