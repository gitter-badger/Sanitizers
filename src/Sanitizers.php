<?php
/**
 * Copyright (c) 2021 The BaalKrshna Team
 */
include(dirname(__FILE__) . "/config.php");
class Sanitizer {

    public function __construct()
    {
        $this->maxInputLength = $config['maxInputLength'];
    }

    private function clean($text)
    {
        if (strlen($text) > $this->maxInputLength) {
            $text = substr($text, 0, $this->maxInputLength);
        }
        $text = trim($text);
        return $text;
    }

    public function Integer($number)
    {
        $number = preg_replace("/[^0-9]/s", "", filter_var($number, FILTER_SANITIZE_NUMBER_INT));
        $number = $this->clean($number);
        return $number;
    }

    public function Hex($hex)
    {
        $hex = preg_replace("/[^a-f0-9]/s", "", filter_var($hex, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH));
        $hex = $this->clean($hex);
        return $hex;
    }

    public function Email($email)
    {
        $email = filter_var(strtolower($email), FILTER_SANITIZE_EMAIL);
        $email = $this->clean($email);
        return $email;
    }

    public function Username($username)
    {
        $username = preg_replace("/[^a-z0-9]/s", "", filter_var(strtolower($username), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH));
        $username = $this->clean($username);
        return $username;
    }

    public function Text($text)
    {
        $text = preg_replace("/[^a-zA-Z0-9]/s", "", filter_var($text, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH));
        $text = $this->clean($text);
        return $text;
    }
    
    public function NonNumericText($text)
    {
        $text = preg_replace("/[^a-zA-Z]/s", "", filter_var($text, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH));
        $text = $this->clean($text);
        return $text;
    }

    public function Name($name)
    {
        $name = preg_replace("/[^a-zA-Z\s+]/s", "", filter_var($name, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH));
        $name = $this->clean($name);
        return $name;
    }

    public function Float($number)
    {
        $number = preg_replace("/[^0-9.]/s", "", filter_var($number, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION));
        $number = $this->clean($number);
        return $number;
    }
}
?>
