<?php
namespace app\interfaces;

interface AppInterface
{
    public function controller();
    public function method($controller);
    public function params();
}
