<?php

namespace app\core;

use app\interfaces\ControllerInterface;

class ControllerExtract
{
    private string $controller = 'Home';
    private string $method = 'index';
    private array $params = [];
    private array $uri;
    private int $sliceIndexStartFrom = 2;
    
    public function controller():string
    {
        $this->uri = explode('/', ltrim($_SERVER['REQUEST_URI'], '/'));
        
        if (isset($this->uri[0]) and $this->uri[0] !== '') {
            $this->controller = ucfirst($this->uri[0]);
        }
    
        $namespaceAndConroller = "app\\controllers\\".$this->controller;
    
        if (class_exists($namespaceAndConroller)) {
            $this->controller = $namespaceAndConroller;
        }
            
        return $this->controller;
    }

    public function method():string
    {
        if (isset($this->uri[1])) {
            $this->method = strtolower($this->uri[1]);
        }
        
        // caso a url fique assim http://localhost:5000/product/
        if ($this->method === '') {
            $this->method = 'index';
        }
            
        if (!method_exists($this->controller, $this->method)) {
            $this->method = 'index';
            $this->sliceIndexStartFrom = 1;
        }

        return $this->method;
    }

    public function params():array
    {
        $coutUri = count($this->uri);

        $this->params = array_slice($this->uri, $this->sliceIndexStartFrom, $coutUri);

        return $this->params;
    }
}
