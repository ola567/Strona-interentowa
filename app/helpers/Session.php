<?php


class Session
{
    public static function addTemp($name, $value)
    {
        if(isset($_SESSION['temp']) && !is_array($_SESSION['temp']))
        {
            $_SESSION['temp'] = [];
        }

        $_SESSION['temp'][$name] = $value;
    }

    public static function flushTemp()
    {
        unset($_SESSION['temp']);
    }

    public static function login($id, $login)
    {
        $_SESSION['logged'] = 1;
        $_SESSION['loggedid'] = $id;
        $_SESSION['loggedlogin'] = $login;
    }

    public static function logout() {
        unset($_SESSION['logged']);
        unset($_SESSION['loggedid']);
        unset($_SESSION['loggedlogin']);
        unset($_SESSION['zaznaczone']);
    }

    public static function checkLogged()
    {
        if(isset($_SESSION['logged']) && $_SESSION['logged'] == 1) {
            return true;
        }
        return false;
    }

    public static function setCheckbox($arrId)
    {
        if(!isset($_SESSION['zaznaczone']))
        {
            $_SESSION['zaznaczone'] = [];
        }
        $_SESSION['zaznaczone'] = array_merge($_SESSION['zaznaczone'], $arrId);
    }

    public static function removeFromCheckbox($arrId)
    {
        if(isset($_SESSION['zaznaczone']))
        {
            $_SESSION['zaznaczone'] = array_diff($_SESSION['zaznaczone'], $arrId);
        }
    }
}