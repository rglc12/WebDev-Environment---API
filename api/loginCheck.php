<?php

include __DIR__.'/../inc/all.php';

// if session doesn't exist, redirect user to index.php 
if(!(isset($_SESSION['username'])&&$_SESSION['username'])!="") {

    header("Location: /../index.php");
    
}

?>