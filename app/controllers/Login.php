<?php
namespace app\controllers;

class Login
{
    public $view;
    public $data;

    public function index()
    {
        $this->view = 'login.php';
        $this->data = [
            'title' => 'Login'
        ];
    }

    public function store()
    {
        var_dump('store');
    }
}
