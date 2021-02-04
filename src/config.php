<?php
/**
 * Configuration file for Sanitizers.php
 */
$config = [
    "maxInputLength" => 80, // Maximum length of string (user input)
// if user input is more than maxInputLength then extra characters will be removed
    "encoding" => "UTF-8" // See https://www.php.net/manual/en/function.htmlspecialchars
// For a list of encoding options
];

?>
