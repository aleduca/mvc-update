<?php
namespace app\controllers;

class Home
{
    public $view;
    public $data;

    public function index()
    {
        $this->view = 'home.php';
        $this->data = [
            'title' => 'Home',
            'name' => 'Alexandre'
        ];
    }

    public function show()
    {
        $this->view = 'show.php';
        $this->data = [
            'title' => 'show'
        ];
    }
}
