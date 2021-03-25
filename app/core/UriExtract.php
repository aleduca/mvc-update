<?php

namespace app\core;

class UriExtract
{
    public static function extract()
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        return explode('/', ltrim($uri, '/'));
    }
}
