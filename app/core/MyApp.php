<?php
namespace app\core;

use app\interfaces\AppInterface;
use Exception;

class MyApp
{
    public function __construct(private AppInterface $controllerExtract)
    {
    }

    public function controller()
    {
        $controller = $this->controllerExtract->controller();
        $method = $this->controllerExtract->method($controller);
        $params = $this->controllerExtract->params();
        
        $this->controller = new $controller;
        $this->controller->$method($params);
    }

    public function view()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            if (!$this->controller->data || !array_key_exists('title', $this->controller->data)) {
                throw new Exception("Crie a propriedade data, e caso tenha criado verifique se criou o índice title");
            }
            
            extract($this->controller->data);
            require '../app/views/index.php';
        }
    }
}
