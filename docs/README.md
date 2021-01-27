# Sanitizers Docs

First require the Sanitizers.php file<br>
**Note:** the file you are using (or the file from where you are including Sanitizers.php) should contain the file *config.php* in the same directory

    require("Sanitizers.php");

Then, do the validations
For example,

    $sanitize = new Sanitizer();
    $username = $sanitize->Username($_POST['username']);
    $password = $sanitize->Hex($_POST['password']);

See [examples](https://github.com/PuneetGopinath/Sanitizers/tree/main/examples) folder for more info.
