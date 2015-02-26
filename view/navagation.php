<?php

require_once (__DIR__ . "/../model/config.php");
//holds data from config.php

if (!authenticateUser()) {
    header("Location: " . $path . "index.php");
    die();
    //protects code from hackers by killing code or sending them back 
}
?>



