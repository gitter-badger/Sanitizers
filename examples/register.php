<?php
require("Sanitizers.php");

if (isset($_POST['Submit']))
{
    $sanitize = new Sanitizer();
    $name = $sanitize->Name($_POST['name']);
    $email = $sanitize->Email($_POST['email']);
    $username = $sanitize->Username($_POST['username']);
    $password = $sanitize->Hex($_POST['password']);
    /*
        Now use $name, $email, $username, $password for user form inputs...
        Save to Database, Send email, etc...
    */
}
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- meta tags, head content -->
    </head>
    <body>
        <p>Registration Form</p>
        <form method="post">
            <label for="name">Your Full Name:</label><br>
            <input type="text" name="name" /><br><br>
            <label for="email">Email Address:</label><br>
            <input type="email" name="email" /><br><br>
            <label for="username">Username:</label><br>
            <input type="text" name="username" /><br><br>
            <label for="password">Password:</label><br>
            <input type="password" name="password" />
            <input type="submit" name="Submit" value="Create Account" />
        </form>
    </body>
</html>
