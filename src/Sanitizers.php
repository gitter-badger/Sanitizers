<?php
/**
 * Copyright (c) 2021 The BaalKrshna Team
 * 
 * PHP Sanitizers
 * See https://github.com/PuneetGopinath/Sanitizers
 */

include(dirname(__FILE__) . "/config.php");
class Sanitizer {

    private $encoding;
    private $maxInputLength;
    private $charsets;
    public function __construct()
    {
        $charsets = ["ISO-8859-1","ISO8859-1","ISO-8859-5","ISO8859-5","ISO-8859-15","ISO8859-15","UTF-8","cp866","ibm866","866","cp1251","Windows-1251","win-1251","1251","cp1252","Windows-1252","1252","KOI8-R","koi8-ru","koi8r","BIG5","950","GB2312","936","BIG5-HKSCS","Shift_JIS","SJIS","SJIS-win","cp932","932","EUC-JP","EUCJP","eucJP-win","MacRoman","",null];
        $this->maxInputLength = (int)$config['maxInputLength'] || 100;
        $this->encoding = (string)$config['encoding'] || "UTF-8";
        if (!array_key_exists($this->encoding, array_values($charsets))) {
            $this->encoding = "";
        }
    }

    private function clean($text, $maxInputLength)
    {
        if (strlen($text) > $this->maxInputLength) {
            $text = substr($text, 0, $this->maxInputLength);
        }
        $text = trim(htmlspecialchars($text, /*flags=*/ENT_QUOTES | ENT_SUBSTITUTE, $this->encoding));
        return $text;
    }

    public function Integer($number)
    {
        $number = $this->clean(preg_replace("/[^0-9]/s", "", filter_var($number, FILTER_SANITIZE_NUMBER_INT)));
        return $number;
    }

    public function Hex($hex)
    {
        $hex = $this->clean(preg_replace("/[^a-f0-9]/s", "", filter_var($hex, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH)));
        return $hex;
    }

    public function Email($email)
    {
        $email = $this->clean(filter_var(strtolower($email), FILTER_SANITIZE_EMAIL));
        return $email;
    }

    public function Username($username)
    {
        $username = $this->clean(preg_replace("/[^a-z0-9]/s", "", $this->Text(strtolower($username))));
        return $username;
    }

    public function Text($text)
    {
        $text = $this->clean(preg_replace("/[^a-zA-Z0-9]/s", "", filter_var($text, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH)));
        return $text;
    }
    
    public function NonNumericText($text)
    {
        $text = $this->clean(preg_replace("/[^a-zA-Z]/s", "", $this->Text($text)));
        return $text;
    }

    public function Name($name)
    {
        $name = $this->clean(preg_replace("/[^a-zA-Z\s+]/s", "", filter_var($name, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH)));
        return $name;
    }

    public function Float($number)
    {
        $number = $this->clean(preg_replace("/[^0-9.]/s", "", filter_var($number, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION)));
        return $number;
    }

    public function URL($url)
    {
        $url = $this->clean(filter_var($url, FILTER_SANITIZE_URL));
        return $url;
    }
}
?>
