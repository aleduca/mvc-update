<?php

namespace app\core;

class ControllerExtract
{
    public static function extract()
    {
        $uri = UriExtract::extract();
        $controller = 'Home';

        if (isset($uri[0]) and $uri[0] !== '') {
            $controller = ucfirst($uri[0]);
        }

        $namespaceAndConroller = "app\\controllers\\".$controller;

        if (class_exists($namespaceAndConroller)) {
            $controller = $namespaceAndConroller;
        }

        return $controller;
    }
}
