<?php

require_once(__DIR__ . "/../model/database.php");
$connection = new mysqli($host, $username, $password);

if ($connection->connect_error) {
    die("ERROR: " . $connection->connect_error);
} else {
    
}

$exists = $connection->select_db($database);
if (!$exists) {
    $query = $connection->query("CREATE DATABASE $database");
    if ($query) {
        echo "database succesful noobs " . $database;
    }
} else {
    echo "data base already exists";
}

$query = $connection->query("CREATE TABLE post ("
. "id int(11) NOT NULL AUTO_INCREMENT ,"
. "title varchar(255) NOT NULL,"
. "post text NOT NULL,"
. "PRIMARY KEY (id))");
$connection->close();
