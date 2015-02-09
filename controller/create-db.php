<?php

require_once(__DIR__ . "/../model/database.php");
$connection = new mysqli($host, $username, $password);

if ($connection->connect_error) {
    die("<p>ERROR: " . $connection->connect_error . "</p>");
} else {
    
}

$exists = $connection->select_db($database);
if (!$exists) {
    $query = $connection->query("CREATE DATABASE $database");
    if ($query) {
        echo "<p>database succesful noobs " . $database . "</p>";
    }
} else {
    echo "<p>data base already exists</p>";
}

$query = $connection->query("CREATE TABLE post ("
        . "id int(11) NOT NULL AUTO_INCREMENT ,"
        . "title varchar(255) NOT NULL,"
        . "post text NOT NULL,"
        . "PRIMARY KEY (id))");


if ($query) {
    echo "succesfully created table:posts";
} else {
    echo "<p>$connection->error</p>";
}
$connection->close();
