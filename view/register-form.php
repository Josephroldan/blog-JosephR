<?php
require_once (__DIR__ . "/../model/config.php");
?>

<h1>Register</h1>

<form method="post" action='<?php echo $path . "controller/create-user.php" ?>'>
    <!--registers user data in database-->
    <div>
        <label for="email">Email: </label>
        <input type="text" name="email"
               <!--sets register email input  -->
    </div>

    <div>
        <label for="username">Username:</label>
        <input type="text" name="username"/>
    </div>
    <!--the box for inputting a new username -->
    <div>
        <label for="password">Password:</label>
        <input type="password" name="password"/>
        <!--the format for inputing the new password-->
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>
<!--the submit button enters the data in the database-->