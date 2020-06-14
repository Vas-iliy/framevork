<?php

namespace app\controllers;

class MainController extends AppController
{
    public $layout = 'main';

    public function indexAction ()
    {
        //$this->layout = false;
//        $this->layout = 'main';
        //$this->view = 'test';
        $name = 'Вася';
        $earn = '10000$';
        $this->set(compact('name', 'earn'));
    }
}