<?php

namespace app\controllers;

use app\models\Main;

class MainController extends AppController
{
    public $layout = 'main';

    public function indexAction ()
    {
	    $model = new Main();
		$posts = $model->findAll();
		//$post = $model->findOne(1);
	    //$data = $model->findBySql("SELECT * FROM {$model->table} ORDER BY id DESC ");

	    $data = $model->findLike('!', 'title');
	    debug($data);
        $title = 'PAGE TITLE';
        $this->set(compact('title', 'posts'));
    }

    public function testAction ()
    {

    }
}