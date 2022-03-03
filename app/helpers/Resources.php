<?php


class Resources
{
    const DEFAULT_PATH_IMAGE = URLROOT . '/img/';

    public static function image(string $filename) : string
    {
        return self::DEFAULT_PATH_IMAGE . $filename;
    }

    public static function route(string $route = null, string $parameters=null) : string
    {
        return URLROOT . '/' . $route.'/'.$parameters;
    }
}