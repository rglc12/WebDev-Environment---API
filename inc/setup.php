<?php

include __DIR__ . '/config.php';

    // Connect to the database on the server
    $option = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_PERSISTENT => true
    );

    // Check if the database exists on the server
    $check = "show databases like '".DBNAME."'";

    try {
        $dsn = "mysql:host=".DBHOST.";";
        $con = new PDO($dsn, DBUSER, DBPASS, $option);
        $results = $con->query("$check");
        if($results->fetch()){                      // if exist, then use
            $con->query("use ".DBNAME);
            $con->exec(DBTABLES);
            header('Location: /../index.php');
        } else {                                    // else, create the database
            $con->query("create database ".DBNAME);
            $con->exec("use ".DBNAME);
            $con->exec(DBTABLES);
            header('Location: /../index.php');
        }
    } catch (PDOException $e) {
            echo $e;
    }
?>