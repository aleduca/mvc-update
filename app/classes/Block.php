<?php

namespace app\classes;

use app\interfaces\ControllerInterface;

class Block
{
    public static function block(ControllerInterface $controllerInterface, array $blockedMethods)
    {
        $methods = get_class_methods($controllerInterface);

        $methodExist = false;
        foreach ($methods as $method) {
            if (in_array($method, $blockedMethods)) {
                $methodExist = true;
            }
        }

        if ($methodExist) {
            // return redirect('/');
        }
    }
}
