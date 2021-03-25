<?php

namespace app\classes;

class Flash
{
    public static function set($key, $message, $alert = 'success')
    {
        if (!isset($_SESSION['messages'][$key])) {
            $_SESSION['messages'][$key] = [
                'message' => $message,
                'alert' => $alert
            ];
        }
    }

    public static function get($key)
    {
        if (isset($_SESSION['messages'][$key])) {
            $flash = $_SESSION['messages'][$key];
            unset($_SESSION['messages'][$key]);

            return $flash;
        }
    }
}
