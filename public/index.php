<?php

require '../vendor/autoload.php';

use app\core\ControllerExtract;
use app\core\MyApp;

try {
    $myApp = new MyApp(new ControllerExtract());
    $myApp->controller();
    $myApp->view();
} catch (\Throwable $th) {
    var_dump($th->getMessage(), $th->getFile(), $th->getLine());
}
