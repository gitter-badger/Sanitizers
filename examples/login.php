<?php
require("Sanitizers.php");

if (isset($_POST['Submit']))
{
    $sanitize = new Sanitizer();
    $username = $sanitize->Username($_POST['username']);
    $password = $sanitize->Hex($_POST['password']);
    /*
        Now use $username, $password for user form inputs...
        Check in Database, Send email, etc...
    */
}
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- meta tags, head content -->
    </head>
    <body>
        <p>Login Form</p>
        <form method="post">
            <label for="username">Username:</label><br>
            <input type="text" name="username" /><br><br>
            <label for="password">Password:</label><br>
            <input type="password" name="password" />
            <input type="submit" name="Submit" value="Login" />
        </form>
    </body>
</html>
