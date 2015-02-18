<?php

require_once(__DIR__ . "/database.php");
session_start();

$path = "/RoldanJ-blog/";
$host = "localhost";
$username = "root";
$password = "root";
$database = "blog_db";

if (!isset($_SESSION["connection"])) {
    echo "setting";
    $connection = new Database($host, $username, $password, $database);
    $_SESSION["connection"] = $connection;
}