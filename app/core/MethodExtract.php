<?php

namespace app\core;

class MethodExtract
{
    public static function extract($controller)
    {
        $uri = UriExtract::extract();

        $sliceIndexStartFrom = 2;

        $method = 'index';

        if (isset($uri[1])) {
            $method = strtolower($uri[1]);
        }

        // caso a url fique assim http://localhost:5000/product/
        if ($method === '') {
            $method = 'index';
        }

        if (!method_exists($controller, $method)) {
            $method = 'index';
            $sliceIndexStartFrom = 1;
        }

        return [
            $method,
            $sliceIndexStartFrom
        ];
    }
}
