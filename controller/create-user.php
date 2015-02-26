<?php

require_once (__DIR__ . "/../model/config.php");

$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
// filter sanitize string makes sure you
$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

echo $password;

$salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";
//setting and implementing  salt

$hashedPassword = crypt($password, $salt);
echo $hashedPassword;

$query = $_SESSION["connection"]->query("INSERT INTO users  SET "
        . "username = '$username',"
        . "email = '$email',"
        . "password = '$hashedPassword',"
        . "salt ='$salt'");
//sets salt for password

if ($query) {
    echo "sucessfully created user: $username";
} else {
    echo "<p>" . $_SESSION["connection"]->error . "</p>";
}
//displays error if not working