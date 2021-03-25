<?php

namespace app\core;

use app\interfaces\AppInterface;

class AppExtract implements AppInterface
{
    public function controller():string
    {
        $controller = ControllerExtract::extract();
        return $controller;
    }
    
    public function method($controller):string
    {
        [$method, $sliceIndexStartFrom] = MethodExtract::extract($controller);
        $this->sliceIndexStartFrom = $sliceIndexStartFrom;

        return $method;
    }

    public function params():array
    {
        $params = ParamsExtract::extract($this->sliceIndexStartFrom);
        return $params;
    }
}
