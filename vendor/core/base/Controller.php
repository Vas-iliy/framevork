<?php

namespace vendor\core\base;

abstract class Controller
{
    /*
     * текущий маршрут
     * @var array
     */
    public $route = [];

    /*
     * вид
     * @var string
     */
    public $view;

    /*
     * шаблон
     * @var string
     */
    public $layout;

    /*
     * пользовательские данные
     * @var array
     */
    public $params;

    public function __construct($route)
    {
        $this->route = $route;
        $this->view = $route['action'];
    }

    public function getView ()
    {
        $vObj = new View($this->route, $this->layout, $this->view);
        $vObj->render($this->params);
    }

    public function set ($params)
    {
        $this->params = $params;
    }

}