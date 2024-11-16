<?php 
class Utilities
{
    public static function get($key, $valueDefault='')
    {
        return isset($_GET[$key])?$_GET[$key]:$valueDefault;
    }

    public static function post($key, $valueDefault='')
    {
        return isset($_POST[$key])?$_POST[$key]:$valueDefault;
    }

    public static function encryptMD5($pw)
    {
            $s1 ='!)*Q'; $s2 = '+@^';//salt - thuoc
            $pw = $s1 . $pw .$s2;
            $newPw = MD5($pw);
            return $newPw;
    }
    public static function encryptSHA1($pw)
    {
            $s1 ='!)*Q'; $s2 = '+@^';//salt - thuoc
            $pw = $s1 . $pw .$s2;
            $newPw = sha1($pw);
            return $newPw;
    }

}