<?php

namespace app\controllers;

class PageController extends AppController
{
	/**
	 * страница вью
	 */
    public function viewAction ()
    {
	    $menu = $this->menu;
	    $title = 'Страница';
	    $this->set(compact('title', 'menu'));
    }
}