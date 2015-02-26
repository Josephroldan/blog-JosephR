<?php
require_once (__DIR__ . "/../model/config.php");
//pulls configuration database data
require_once (__DIR__ . "/../controller/login-verify.php");

if(!authenticateUser()){
    header("Location: " . $path . "index.php");           
    die();
}

?>
<h1>Create Blog Post</h1>

<form method="post" action='<?php echo $path . "controller/create-post.php" ?>'>
    <div>
        <label for="title">Title: </label>
        <input type="text" name="title" />  
        <!--form for title for posts-->
    </div>

    <div>
        <label for="post">Post:</label>
        <textarea name="post"></textarea>
        <!--area for typing what you want to say -->
    </div>

    <div>
        <button type="submit">Submit</button>
        <!-- imprints post-->
    </div>
</form>

