<?php

/**
 * Description of IP
 *
 * @author root
 */
class IP
{

    public static function getCountry($ip)
    {
        require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR .
                'tabgeo' . DIRECTORY_SEPARATOR . 'tabgeo_country_v4.php';

        return tabgeo_country_v4($ip);
    }

    public static function getRealIP()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            return $_SERVER['HTTP_CLIENT_IP'];
        }

        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }

        return $_SERVER['REMOTE_ADDR'];
    }

}
