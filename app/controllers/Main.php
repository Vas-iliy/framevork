<?php

namespace app\controllers;

class Main extends App
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