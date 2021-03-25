<?php

session_start();

require '../vendor/autoload.php';

use app\core\MyApp;
use app\core\AppExtract;

try {
    $myApp = new MyApp(new AppExtract());
    $myApp->controller();
    $myApp->view();
} catch (\Throwable $th) {
    var_dump($th->getMessage(), $th->getFile(), $th->getLine());
}
