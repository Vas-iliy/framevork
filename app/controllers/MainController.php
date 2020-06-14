<?php

namespace app\controllers;

use app\models\Main;

class MainController extends AppController
{
   // public $layout = 'main';

    public function indexAction ()
    {
	    $model = new Main();

        $name = 'Вася';
        $earn = '10000$';
        $this->set(compact('name', 'earn'));


    }
}