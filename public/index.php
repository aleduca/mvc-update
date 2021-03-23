<?php

require '../vendor/autoload.php';

use app\core\ControllerExtract;

try {
    $controllerExtract = new ControllerExtract;
    $controller = $controllerExtract->controller();
    $method = $controllerExtract->method();
    $params = $controllerExtract->params();
    
    $controller = new $controller;
    $controller->$method($params);

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (!$controller->data || !array_key_exists('title', $controller->data)) {
            throw new Exception("Crie a propriedade data, e caso tenha criado verifique se criou o índice title");
        }
        
        extract($controller->data);
        require '../app/views/index.php';
    }
} catch (\Throwable $th) {
    var_dump($th->getMessage(), $th->getFile(), $th->getLine());
}
