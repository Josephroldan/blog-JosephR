<?php

require_once (__DIR__ . "/../model/config.php");


$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

echo "<p>Title: $title</p>";
echo "<p>Post: $post</p>";


$query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'");
// tells the query to insert the posts title and post

if ($query) {
    echo "<p>succesfully inserted post: $title</p>";
} else {
    echo "<p>" . $_SESSION["connection"]->error . "</p>";
}
//notifies if post was sucessful or tells if it has error
