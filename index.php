
<?php

require_once (__DIR__ . "/controller/login-verify.php");
//pulls the login verification
require_once (__DIR__ . "/view/header.php");
if (authenticateUser()) {
    //function for  the user authentication
    require_once (__DIR__ . "/view/navagation.php");
}
require_once (__DIR__ . "/controller/create-db.php");
//pulls data from create database.php
require_once (__DIR__ . "/view/footer.php");
//puts in html ending brackets
require_once (__DIR__ . "/controller/read-posts.php");
//pulls the code needed for seeing all posts

    
