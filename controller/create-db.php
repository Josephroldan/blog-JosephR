<?php

require_once("../model/database.php");
$connection = new mysqli($host, $username, $password)

if($connection->connect_error){
    die("ERROR: ".$connection->connect_error )
}
        else {
    echo "success";
}

