<?php


namespace app\controllers;


use app\models\Main;
use vendor\core\base\Controller;

class AppController extends Controller
{
	public $menu;
	public $meta = [];

	public function __construct( $route ) {
		parent::__construct( $route );
		new Main();
		$this->menu = \R::findAll('category');
	}

	/**
	 * Заполняем метаданные различных страниц
	 * @param string $title
	 * @param string $desc
	 * @param string $keywords
	 */
	protected function setMeta ($title = '', $desc = '', $keywords = '')
	{
		$this->meta['title'] = $title;
		$this->meta['desc'] = $desc;
		$this->meta['keywords'] = $keywords;
	}

}