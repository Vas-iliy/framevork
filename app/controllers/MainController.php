<?php

namespace app\controllers;

use app\models\Main;
use R;

class MainController extends AppController
{
    //public $layout = 'main';

	/**
	 * Страница индекс
	 */
    public function indexAction ()
    {
	    $model = new Main();
	    $posts = R::findAll('posts');
	    $menu = $this->menu;
	    $title = 'PAGE TITLE';
	    $this->setMeta('Главная страница', 'Описание страницы', 'Ключевые слова');
	    $meta = $this->meta;
	    $this->set(compact('title', 'posts', 'menu', 'meta'));
		/*//$posts = $model->findAll();
		//$post = $model->findOne(1);
	    //$data = $model->findBySql("SELECT * FROM {$model->table} ORDER BY id DESC ");
	    $data = $model->findLike('!', 'title');
	    debug($data);
        $title = 'PAGE TITLE';
        $this->set(compact('title', 'posts'));*/
    }

	/**
	 * Страница тест
	 */
    public function testAction ()
    {
		$this->layout = 'test';
    }
}