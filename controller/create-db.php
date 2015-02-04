<?php

require_once(__DIR__ . "/../model/database.php");
$connection = new mysqli($host, $username, $password);

if ($connection->connect_error) {
    die("ERROR: " . $connection->connect_error);
} else {
    echo "success: " . $connection->host_info;
}

$exists = $connection->select_db($database);
 if($exists){
     echo "Database exists";
 }

$connection->close();
