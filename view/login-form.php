<?php
require_once (__DIR__ . "/../model/config.php");
//pulls  configuration database
?>

<h1>login</h1>

<form method="post" action='<?php echo $path . "controller/login-user.php" ?>'>
    <!--accesses database to login user -->
    <div>
        <label for="username">Username:</label>
        <input type="text" name="username"/>
    </div>
    <!--setup for typing in username-->
    <div>
        <label for="password">Password:</label>
        <input type="password" name="password"/>
    </div>
    <!--format to place password-->
    <div>
        <button type="submit">Submit</button>
        <!--submit button to enter data-->
    </div>
</form>