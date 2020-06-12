<?php


namespace vendor\core\base;


class View
{
    /**
     * текущий маршрут
     * @var array
     */
    protected $route = [];

    /**
     * текущий вид
     * @var string
     */
    protected  $view;

    /**
     * текущий шаблон
     * @var string
     */
    protected $layout;

    public function __construct($route, $layout = '', $view = '')
    {
        $this->route = $route;
        $this->layout = $layout ?: LAYOUT;
        $this->view = $view;
    }

}