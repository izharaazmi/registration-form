<?php

// This class will be responsible to read or write (later) the super globals like $_GET, $_POST, $_SERVER etc.
// Please note that we need to implement content filtering for security reasons, but for now we'd skip that.
class Request
{
    public static function get($var, $default)
    {
        if (isset($_GET[$var]))
        {
            return $_GET[$var];
        }

        return $default;
    }

    public static function post($var, $default)
    {
        if (isset($_POST[$var]))
        {
            return $_POST[$var];
        }

        return $default;
    }

    public static function param($var, $default)
    {
        if (isset($_REQUEST[$var]))
        {
            return $_REQUEST[$var];
        }

        return $default;
    }

    public static function server($var, $default)
    {
        if (isset($_SERVER[$var]))
        {
            return $_SERVER[$var];
        }

        return $default;
    }

    public static function cookie($var, $default)
    {
        if (isset($_COOKIE[$var]))
        {
            return $_COOKIE[$var];
        }

        return $default;
    }

    public static function session($var, $default)
    {
        if (isset($_SESSION[$var]))
        {
            return $_SESSION[$var];
        }

        return $default;
    }

    public function redirect($url)
    {
        // TODO: First check whether the response is empty before setting header
        header('Location: ' . $url);
    }
}