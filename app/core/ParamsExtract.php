<?php

namespace app\core;

class ParamsExtract
{
    public static function extract($sliceIndexStartFrom)
    {
        $uri = UriExtract::extract();
        $countUri = count($uri);

        $params = array_slice($uri, $sliceIndexStartFrom, $countUri);

        return $params;
    }
}
