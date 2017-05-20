<?php

//destroy session
session_start();
unset($_SESSION['username']);
session_destroy();

?>