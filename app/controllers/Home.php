<?php
namespace app\controllers;

use app\classes\Block;
use app\interfaces\ControllerInterface;
use app\models\activerecord\FindAll;
use app\models\User;

class Home implements ControllerInterface
{
    public $view;
    public $data;


    public function index(array $args)
    {
        $users = (new User)->execute(new FindAll(fields:'id,firstName,lastName'));

        $this->view = 'home.php';
        $this->data = [
            'title' => 'Home',
            'users' => $users
        ];
    }


    public function edit(array $args)
    {
        throw new \Exception('Method edit() is not implemented.');
    }

    public function show(array $args)
    {
        throw new \Exception('Method show() is not implemented.');
    }

    public function update(array $args)
    {
        throw new \Exception('Method update() is not implemented.');
    }

    public function destroy(array $args)
    {
        throw new \Exception('Method destroy() is not implemented.');
    }

    public function store()
    {
        throw new \Exception('Method store() is not implemented.');
    }
}
